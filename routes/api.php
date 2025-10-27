
<?php

use App\Http\Controllers\User\Api\AuthController;
use App\Http\Controllers\User\Api\HomeController;
use App\Http\Controllers\User\Api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('register', 'register');
        Route::post('verify-email', 'verifyEmail');
        Route::post('resend-otp', 'resendOtp');
        Route::post('forget-password', 'forgetPassword');
        Route::post('login', 'login');
    });
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('upload/document', 'uploadDocument');
        Route::post('reset-password', 'resetPassword');
    });
    Route::controller(HomeController::class)->group(function () {
        Route::get('/get/shifts', 'shifts');
        Route::get('/get/shifts/{id}', 'shiftDetails');
        Route::post('/claim-shift', 'claimShift');
        Route::post('/confirm-verification', 'confirmVerification');
        Route::post('/checkout-shift', 'checkOutShift');
    });
    Route::controller(ProfileController::class)->group(function () {
        Route::post('/profile/update', 'updateProfile');
        Route::post('/profile/change/password', 'changePassword');
        // Route::post('/claim-shift', 'claimShift');
        // Route::post('/confirm-verification', 'confirmVerification');
        // Route::post('/checkout-shift', 'checkOutShift');
    });
});
