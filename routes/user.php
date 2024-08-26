<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\OnboardingController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/onboarding', [OnboardingController::class, 'index'])->name('onboarding.index');
    Route::get('/onboarding/skill-category', [OnboardingController::class, 'skillCategoryView'])->name('onboarding.skill-category');
    Route::post('/onboarding/skill-category', [OnboardingController::class, 'skillCategoryStore'])->name('onboarding.skill-category.store');
    Route::get('/onboarding/about', [OnboardingController::class, 'aboutView'])->name('onboarding.about');
    Route::post('/onboarding/about', [OnboardingController::class, 'aboutStore'])->name('onboarding.about.store');
    Route::get('/onboarding/salary', [OnboardingController::class, 'salaryView'])->name('onboarding.salary');
    Route::post('/onboarding/salary', [OnboardingController::class, 'salaryStore'])->name('onboarding.salary.store');

});