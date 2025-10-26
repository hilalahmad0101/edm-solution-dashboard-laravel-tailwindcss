
<?php

use App\Http\Controllers\User\Api\AuthController;
use App\Http\Controllers\User\Api\HomeController;
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
        Route::post('reset-password', 'resetPassword');
        Route::post('login', 'login');
        Route::post('upload/document', 'uploadDocument');
    });
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/get/shifts', 'shift');
    Route::get('/get/shifts/{id}', 'shiftDetails');
    Route::post('/claim-shift', 'claimShift');
});
