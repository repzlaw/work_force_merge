<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\RegisterOtp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\OtpVerification;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);

        $user = User::create([
            'email' => $request->email,
        ]);

        $otp = rand(100000, 999999); // Generate OTP
        $expiresAt = now()->addMinutes(30); // Set OTP expiry time

        $user->otpVerification()->updateOrCreate([
            'user_id' => $user->id,
         ],
         [
            'otp' => $otp,
            'expires_at' => $expiresAt,
         ]);

        Mail::to($user->email)->send(new RegisterOtp($otp, $user)); // Send OTP to user's email

        return redirect()->route('complete-registration', ['email' => $request->email]);
    }

    public function otpView() : View 
    {
        return view('auth.otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp'   => 'required|integer',
        ]);

        $user = User::where('email', $request->email)->first();

        $otpVerification = OtpVerification::where('user_id', $user->id)
                                        ->where('otp', $request->otp)
                                        ->where('expires_at', '>', now())
                                        ->first();

        if (!$otpVerification) {
            return redirect()->back()->withErrors(['otp' => 'The OTP is invalid.'])->withInput();
        }

        $user->update(['email_verified_at' => now()]);

        $otpVerification->delete();

        return redirect()->route('complete-registration', ['email' => $request->email]);
    }

    public function completeRegistrationView(Request $request) 
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $referrer = $request->headers->get('referer');
        $registerReferrer = url('/register');
        $forgotPasswordReferrer = url('/forgot-password');

        if ($referrer !== $registerReferrer && $referrer !== $forgotPasswordReferrer) {
            return redirect()->route('register');
        }

        $otp = OtpVerification::whereHas('user', function ($query) use ($request) {
            $query->where('email', $request->email);
        })->first();

        $time = $otp ? $otp->updated_at : now()->subMinutes(30);
        $time = $time->timestamp;

        return view('auth.complete-registration', [
            'time' => $time
        ]);
    }

    public function completeRegistration(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp'   => 'required|integer',
            'name'  => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user->email_verified_at) {
            return redirect()->route('login', ['email' => $request->email]);
        }

        $otpVerification = OtpVerification::where('user_id', $user->id)
                                        ->where('otp', $request->otp)
                                        ->where('expires_at', '>', now())
                                        ->first();

        if (!$otpVerification) {
            return redirect()->back()->withErrors(['otp' => 'The OTP is invalid.'])->withInput();
        }

        $user->update([
            'email_verified_at' => now(),
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        $user->profile()->create();

        $otpVerification->delete();

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        $otp = rand(100000, 999999);
        $expiresAt = now()->addMinutes(30); 

        $user->otpVerification()->updateOrCreate([
            'user_id' => $user->id,
         ],
         [
            'otp' => $otp,
            'expires_at' => $expiresAt,
         ]);

        Mail::to($user->email)->send(new RegisterOtp($otp, $user)); 

        return true;
    }
}
