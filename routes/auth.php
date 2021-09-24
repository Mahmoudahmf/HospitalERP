<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\H_DoctorsController;
use App\Http\Controllers\Auth\H_NursesController;
use App\Http\Controllers\Auth\H_EmployesController;


Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');
####################################StartUserLogin##############################
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

####################################DoctorLogin##############################

Route::post('/login/doctors', [H_DoctorsController::class, 'store'])
                ->middleware('guest')->name('login.doctors');
Route::post('/logout/doctors', [H_DoctorsController::class, 'destroy'])
                ->middleware('auth:doctors')
                ->name('logout.doctors');

####################################NurseLogin##############################

Route::post('/login/nurses', [H_NursesController::class, 'store'])
                ->middleware('guest')->name('login.nurses');
Route::post('/logout/nurses', [H_NursesController::class, 'destroy'])
                ->middleware('auth:nurses')
                ->name('logout.nurses');
###################################EmployesLogin##########################################
Route::post('/login/employes', [H_EmployesController::class, 'store'])
                ->middleware('guest')->name('login.employes');
Route::post('/logout/employes', [H_EmployesController::class, 'destroy'])
                ->middleware('auth:employes')
                ->name('logout.employes');
 ##################################################################
               
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

