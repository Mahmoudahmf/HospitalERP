<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\H_Doctors\DoctorController;
use App\Http\Controllers\H_Nurses\NursersController;
use App\Http\Controllers\H_Employes\EmployesController;
use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\H_Departments\DepartmentsController;
use App\Http\Controllers\H_Rooms\RoomsController;

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

//        <!-- eng asmaaa -->
       Route::get('/rooms', function () {
       			return view('pages.layout.doctor_room_components.room_master');
       		})->name('rooms');



	       Route::get('/patient', function () {
           			return view('pages.layout.doctor_patient_components.patient_master');
           		})->name('patient');

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

###############################AdminsRoute##############################
Route::group(
	[
		'middleware' => ['auth:admins']
	], function(){

		Route::get('/dashboard/admins', function () {
			return view('pages.backend.admins.dashboard');
		})->name('dashboard.admins');
        Route::resource('admins',AdminsController::class);

		###################################Depatments################################
		Route::group(['namespace'=>'H_Departments'],function(){
			Route::get('showdepartments',[DepartmentsController::class,'index'])->name('showdepartments');
			Route::post('createdepartments',[DepartmentsController::class,'create'])->name('createdepartments');
			Route::get('editdepatment/{id}',[DepartmentsController::class,'edit'])->name('editdepatment');
			Route::patch('updatedepatment',[DepartmentsController::class,'store'])->name('updatedepatment');
			Route::get('deletedepatment/{id}',[DepartmentsController::class,'destroy'])->name('deletedepatment');


		});
	###################################Nurses################################
	Route::group(['namespace'=>'H_Nurses'],function(){
		Route::get('showNurses',[NursersController::class,'index'])->name('showNurses');
		Route::post('createnurse',[NursersController::class,'create'])->name('createnurse');
		Route::get('editnurses/{id}',[NursersController::class,'edit'])->name('editnurses');
		Route::patch('updatenurses',[NursersController::class,'store'])->name('updatenurses');
		Route::get('deletenurses/{id}',[NursersController::class,'destroy'])->name('deletenurses');

	});

	##################################Employess################################
	Route::group(['namespace'=>'H_Employes'],function(){
		Route::get('showemployes',[EmployesController::class,'index'])->name('showemployes');
		Route::post('createemployes',[EmployesController::class,'create'])->name('createemployes');
		Route::get('editemployes/{id}',[EmployesController::class,'edit'])->name('editemployes');
		Route::patch('updateemployes',[EmployesController::class,'store'])->name('updateemployes');
		Route::get('deleteemployes/{id}',[EmployesController::class,'destroy'])->name('deleteemployes');

	});


##################################Employess################################
Route::group(['namespace'=>'H_Rooms'],function(){
	Route::get('showerooms',[RoomsController::class,'index'])->name('showerooms');
	Route::post('createrooms',[RoomsController::class,'create'])->name('createrooms');
});

##################################Doctors################################
Route::group(['namespace'=>'H_Doctors'],function(){
	Route::get('showedoctors',[DoctorController::class,'index'])->name('showedoctors');
	Route::post('createdoctor',[DoctorController::class,'create'])->name('createdoctor');
});



	});
	#######################################EndAdminRoutes############################




require __DIR__.'/auth.php';



