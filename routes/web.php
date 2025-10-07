<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.auth.welcome')->name('pages.welcome');
Route::view('/register', 'pages.auth.register')->name('pages.register');
Route::view('/login', 'pages.auth.login')->name('pages.login');
Route::view('/forget-password', 'pages.auth.forget-password')->name('pages.forget-password');


Route::view('/dashboard', 'pages.admin.dashboard2')->name('pages.dashboard');
Route::view('/user', 'pages.admin.user')->name('pages.user');
Route::view('/facilities', 'pages.admin.facilities')->name('pages.facilities');
Route::view('/pending-facilities', 'pages.admin.pending-facilities')->name('pages.pending-facilities');
Route::view('/payments', 'pages.admin.payments')->name('pages.payments');
Route::view('/payout-payments', 'pages.admin.payout-payments')->name('pages.payout-payments');
Route::view('/credential', 'pages.admin.credential')->name('pages.credential');
Route::view('/shifts', 'pages.admin.shifts')->name('pages.shifts');
Route::view('/reports', 'pages.admin.reports')->name('pages.reports');
Route::view('/support', 'pages.admin.support')->name('pages.support');
