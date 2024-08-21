<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employer\ProfileController;
use App\Http\Controllers\Employer\Auth\PasswordController;
use App\Http\Controllers\Employer\Auth\NewPasswordController;
use App\Http\Controllers\Employer\Auth\VerifyEmailController;
use App\Http\Controllers\Employer\Auth\RegisteredUserController;
use App\Http\Controllers\Employer\Auth\PasswordResetLinkController;
use App\Http\Controllers\Employer\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Employer\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Employer\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Employer\Auth\EmailVerificationNotificationController;

Route::prefix('employer')->name('employer.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
                    ->name('register');
    
        Route::post('register', [RegisteredUserController::class, 'store']);
    
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
                    ->name('login');
    
        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                    ->name('password.request');
    
        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                    ->name('password.email');
    
        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                    ->name('password.reset');
    
        Route::post('reset-password', [NewPasswordController::class, 'store'])
                    ->name('password.store');
    });


    
    Route::middleware('employer')->group(function () {
        Route::get('verify-email', EmailVerificationPromptController::class)
                    ->name('verification.notice');
    
        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                    ->middleware(['signed', 'throttle:6,1'])
                    ->name('verification.verify');
    
        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                    ->middleware('throttle:6,1')
                    ->name('verification.send');
    
        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                    ->name('password.confirm');
    
        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    
        Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                    ->name('logout');
    });

    Route::middleware('employer')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('/', function () {
        return view('employer.dashboard');
    })->middleware(['employer'])->name('dashboard');

    Route::get('/dashboard', function () {
        return view('employer.dashboard');
    })->middleware(['employer'])->name('dashboard');
});
