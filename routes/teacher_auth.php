<?php

use App\Http\Controllers\teacher\Auth\AuthenticatedSessionController;
use App\Http\Controllers\teacher\Auth\ConfirmablePasswordController;
use App\Http\Controllers\teacher\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\teacher\Auth\EmailVerificationPromptController;
use App\Http\Controllers\teacher\Auth\NewPasswordController;
use App\Http\Controllers\teacher\Auth\PasswordController;
use App\Http\Controllers\teacher\Auth\PasswordResetLinkController;
use App\Http\Controllers\teacher\Auth\RegisteredUserController;
use App\Http\Controllers\teacher\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:teacher')->group(function () {
    Route::get('teacherregister', [RegisteredUserController::class, 'create'])
                ->name('teacherregister');

    Route::post('teacherregister', [RegisteredUserController::class, 'store']);

    Route::get('teacherlogin', [AuthenticatedSessionController::class, 'create'])
                ->name('teacherlogin');

    Route::post('teacherlogin', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('teacher')->group(function () {
   // Route::get('verify-email', EmailVerificationPromptController::class)
    //            ->name('verification.notice');

    //Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //            ->middleware(['signed', 'throttle:6,1'])
      //          ->name('verification.verify');

  //  Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
   //             ->middleware('throttle:6,1')
   //             ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('teacherlogout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('teacherlogout');
});
