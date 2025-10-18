<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.auth.welcome')->name('pages.welcome');
Route::view('/register', 'pages.auth.register')->name('pages.register');
Route::view('in', 'pages.auth.login')->name('pages.login');
Route::view('/forget-password', 'pages.auth.forget-password')->name('pages.forget-password');


Route::view('/dashboard', 'pages.admin.dashboard4')->name('pages.dashboard');
Route::view('/user', 'pages.admin.user')->name('pages.user');
Route::view('/facilities', 'pages.admin.facilities')->name('pages.facilities');
Route::view('/pending-facilities', 'pages.admin.pending-facilities')->name('pages.pending-facilities');
Route::view('/payments', 'pages.admin.payments')->name('pages.payments');
Route::view('/payout-payments', 'pages.admin.payout-payments')->name('pages.payout-payments');
Route::view('/compliance', 'pages.admin.compliance')->name('pages.compliance');
Route::view('/time-sheet', 'pages.admin.time-sheet')->name('pages.time-sheet');
Route::view('/pending-compliance', 'pages.admin.pending-compliance')->name('pages.pending-compliance');
Route::view('/expire-soon', 'pages.admin.expire-soon')->name('pages.expire-soon');
Route::view('/expired', 'pages.admin.expired')->name('pages.expired');
Route::view('/credential', 'pages.admin.credential')->name('pages.credential');
Route::view('/shifts', 'pages.admin.shifts')->name('pages.shifts');
Route::view('/calender-view', 'pages.admin.calender-view')->name('pages.calender-view');
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
