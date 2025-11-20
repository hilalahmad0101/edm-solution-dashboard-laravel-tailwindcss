<?php

use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\ShiftController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.auth.welcome')->name('pages.welcome');
Route::view('/register', 'pages.auth.register')->name('pages.register');
Route::view('login', 'pages.auth.login')->name('pages.login');
Route::view('/forget-password', 'pages.auth.forget-password')->name('pages.forget-password');

Route::controller(ShiftController::class)->group(function () {
    Route::get('shifts', 'index')->name('pages.shifts');
    Route::get('approved/shifts', 'approvedShifts')->name('admin.approved.shifts');
    Route::patch('shifts/approved/{id}', 'approved')->name('pages.shifts.approve');
    Route::patch('shifts/cancel/{id}', 'cancelled')->name('pages.shifts.cancel');
    Route::patch('shifts/delete/{id}', 'delete')->name('pages.shifts.delete');
    Route::get('/calender-view', 'calenderView')->name('admin.shifts.calender-view');
    Route::get('/admin/shifts/{id}', 'show')->name('admin.shifts.show');
    Route::delete('/admin/shifts/{id}', 'destroy')->name('admin.shifts.destroy');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->name('admin.users.index');
    Route::delete('/user/delete/{id}', 'destroy')->name('admin.users.destroy');
});
Route::controller(FacilityController::class)->group(function () {
    Route::get('/facilities', 'index')->name('admin.facilities.index');
    Route::delete('/facilities/delete/{id}', 'destroy')->name('admin.facilities.destroy');
});

Route::view('/pending-facilities', 'pages.admin.pending-facilities')->name('pages.pending-facilities');

Route::view('/dashboard', 'pages.admin.dashboard4')->name('pages.dashboard');
Route::view('/payments', 'pages.admin.payments')->name('pages.payments');
Route::view('/payout-payments', 'pages.admin.payout-payments')->name('pages.payout-payments');
Route::view('/compliance', 'pages.admin.compliance')->name('pages.compliance');
Route::view('/time-sheet', 'pages.admin.time-sheet')->name('pages.time-sheet');
Route::view('/pending-compliance', 'pages.admin.pending-compliance')->name('pages.pending-compliance');
Route::view('/expire-soon', 'pages.admin.expire-soon')->name('pages.expire-soon');
Route::view('/expired', 'pages.admin.expired')->name('pages.expired');
Route::view('/credential', 'pages.admin.credential')->name('pages.credential');
// Route::view('/shifts', 'pages.admin.shifts')->name('pages.shifts');
Route::view('/open-shifts', 'pages.admin.open-shifts')->name('pages.open-shifts');
Route::view('/reports', 'pages.admin.reports')->name('pages.reports');
Route::view('/document', 'pages.admin.document')->name('pages.document');
Route::view('/support', 'pages.admin.support')->name('pages.support');
Route::view('/notification', 'pages.admin.notification')->name('pages.notification');
Route::view('/audit-log', 'pages.admin.audit-log')->name('pages.audit-log');
Route::view('/setting', 'pages.admin.setting')->name('pages.setting');
Route::view('/shift-orchestration', 'pages.admin.shift-orchestration')->name('pages.shift-orchestration');
Route::view('/smart-match', 'pages.admin.smart-match')->name('pages.smart-match');
Route::view('/waitlist', 'pages.admin.waitlist')->name('pages.waitlist');
