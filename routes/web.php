<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\H_Doctors\DoctorController;
use App\Http\Controllers\H_Nurses\NursersController;
use App\Http\Controllers\H_Employes\EmployesController;
use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\H_Departments\DepartmentsController;

//
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::view('/', 'pages.master');
Route::view('/log', 'pages.login');

###############################DoctorsRoute##############################
// Route::group(
// 	[
// 		'middleware' => ['auth:doctors']
// 	], function(){
// 		Route::get('/dashboard/doctors', function () {
// 			return view('pages.backend.h_doctors.dashboard');
// 		})->name('dashboard.doctors');
//        Route::resource('doctors',DoctorController::class);
//
// 	});

###############################NursesRoute##############################
// Route::group(
// 	[
// 		'middleware' => ['auth:nurses']
// 	], function(){
// 		Route::get('/dashboard/nurses', function () {
// 			return view('pages.backend.h_nurses.dashboard');
// 		})->name('dashboard.nurses');
//
// 		Route::resource('nurses',NursersController::class);
//
// 	});
//
###############################EmployesRoute##############################
// Route::group(
// 	[
// 		'middleware' => ['auth:employes']
// 	], function(){
// 		Route::get('/dashboard/employes', function () {
// 			return view('pages.backend.h_employes.dashboard');
// 		})->name('dashboard.employes');
// 		Route::resource('employes',EmployesController::class);
//
// 	});

###############################AdminsRoute##############################
// Route::group(
// 	[
// 		'middleware' => ['auth:admins']
// 	], function(){
//
// 		Route::get('/dashboard/admins', function () {
// 			return view('pages.backend.admins.dashboard');
// 		})->name('dashboard.admins');
//         Route::resource('admins',AdminsController::class);

		###################################Depatments################################
// 		Route::group(['namespace'=>'H_Departments'],function(){
// 			Route::get('showdepartments',[DepartmentsController::class,'index'])->name('showdepartments');
// 			Route::post('storedepartments',[DepartmentsController::class,'store'])->name('storedepartments');
// 			Route::get('editdepatment/{id}',[DepartmentsController::class,'edit'])->name('editdepatment');
// 			Route::patch('updatedepatment',[DepartmentsController::class,'update'])->name('updatedepatment');
// 			Route::get('deletedepatment/{id}',[DepartmentsController::class,'destroy'])->name('deletedepatment');


// 		});
		###################################Depatments################################


		// Route::resource('departments/{$id ??}',DepartmentsController::class);
// 	});
// require __DIR__.'/auth.php';
