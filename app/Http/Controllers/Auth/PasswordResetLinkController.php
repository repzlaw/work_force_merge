<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\RegisterOtp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user->email_verified_at) {
            $otp = rand(100000, 999999); // Generate OTP
            $expiresAt = now()->addMinutes(30); // Set OTP expiry time

            $user->otpVerification()->updateOrCreate([
                'otp' => $otp
            ],
            [
                'expires_at' => $expiresAt,
            ]);

            Mail::to($user->email)->send(new RegisterOtp($otp, $user)); // Send OTP to user's email

            return redirect()->route('complete-registration', ['email' => $request->email]);
        }
        
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
