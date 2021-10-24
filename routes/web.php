<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\H_Doctors\DoctorController;
use App\Http\Controllers\H_Nurses\NursersController;
use App\Http\Controllers\H_Employes\EmployesController;
use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\H_Departments\DepartmentsController;
use App\Http\Controllers\H_Rooms\RoomsController;
use App\Http\Controllers\H_Patients\PatientsController;
use App\Http\Controllers\H_Operations\OperationsController;
use App\Http\Controllers\H_Rays\RaysController;

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

        Route::group(['namespace'=>'H_Patients'],function()
		{
		Route::get('patients',[PatientsController::class,'index'])->name('patients');
        Route::post('createpatient',[PatientsController::class,'create'])->name('createpatient');
	    Route::get('editpatient/{id}',[PatientsController::class,'edit']) ->name('editpatient');
	    Route::get('deletepatient/{id}',[PatientsController::class,'destroy']) ->name('deletepatient');
        Route::patch('updatepatient',[PatientsController::class,'store'])->name('updatepatient');
     	});

		 Route::group(['namespace'=>'H_Operations'],function()
		 {
		   Route::get('examination/{id}',[OperationsController::class,'index'])->name('examination');
		   Route::get('reservations',[OperationsController::class,'show'])->name('reservations');
		   Route::get('/get_doctors/{id}', [DoctorController::class,'get_doctors'])->name('get_doctors');
		   Route::get('/getroom/{id}', [DoctorController::class,'getroom'])->name('getroom');
		   Route::get('/getdoctorprice/{id}', [DoctorController::class,'getdoctorprice'])->name('getdoctorprice');
		   Route::post('createxam',[OperationsController::class,'create'])->name('createxam');
		});


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
	Route::get('editrooms/{id}',[RoomsController::class,'edit'])->name('editrooms');
	Route::get('deleterooms/{id}',[RoomsController::class,'destroy'])->name('deleterooms');
	Route::patch('updaterooms',[RoomsController::class,'store'])->name('updaterooms');

});

##################################Doctors################################
Route::group(['namespace'=>'H_Doctors'],function(){
	Route::get('showedoctors',[DoctorController::class,'index'])->name('showedoctors');
	Route::post('createdoctor',[DoctorController::class,'create'])->name('createdoctor');
	Route::get('editdoctor/{id}',[DoctorController::class,'edit'])->name('editdoctor');
	Route::get('deletedoctor/{id}',[DoctorController::class,'destroy'])->name('deletedoctor');
	Route::patch('updatedoctor',[DoctorController::class,'store'])->name('updatedoctor');

	
});

    Route::group(['namespace' => 'H_Rays'], function ()
	 {
			Route::get('showerays', [RaysController::class, 'index'])->name('showerays');
			Route::post('add_rays',[RaysController::class, 'create'])->name('add_rays');
			Route::get('Edit_Rays/{id}',[RaysController::class,'edit'])->name('Edit_Rays');
			Route::patch('update_rays',[RaysController::class,'store'])->name('update_rays');
			Route::get('Delete_Rays/{id}',[RaysController::class,'destroy'])->name('Delete_Rays');
	  }
	);
	
	});
	#######################################EndAdminRoutes############################

require __DIR__.'/auth.php';
