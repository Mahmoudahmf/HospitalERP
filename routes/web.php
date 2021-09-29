<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\H_Doctors\DoctorController;
use App\Http\Controllers\H_Nurses\NursersController;
use App\Http\Controllers\H_Employes\EmployesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


###############################DoctorsRoute##############################
Route::group(
	[
		'middleware' => ['auth:doctors']
	], function(){
		Route::get('/dashboard/doctors', function () {
			return view('pages.backend.h_doctors.dashboard');
		})->name('dashboard.doctors');
       Route::resource('doctors',DoctorController::class);

	});

###############################NursesRoute##############################
Route::group(
	[
		'middleware' => ['auth:nurses']
	], function(){
		Route::get('/dashboard/nurses', function () {
			return view('pages.backend.h_nurses.dashboard');
		})->name('dashboard.nurses');

		Route::resource('nurses',NursersController::class);

	});
	
###############################EmployesRoute##############################
Route::group(
	[
		'middleware' => ['auth:employes']
	], function(){
		Route::get('/dashboard/employes', function () {
			return view('pages.backend.h_employes.dashboard');
		})->name('dashboard.employes');
		Route::resource('employes',EmployesController::class);

	});
require __DIR__.'/auth.php';