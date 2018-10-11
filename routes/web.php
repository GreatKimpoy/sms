<?php

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

Route::resource('dashboard', 'DashboardController');
Route::resource('query', 'QueryController');
Route::resource('report', 'ReportController');


Route::namespace('Maintenance')->group(function() {
    Route::get('service/part/{id}', 'ServiceListController@showServicePart');
    Route::post('model/save' ,'VehicleModelsController@addParts');
    Route::resource('customer', 'CustomerController');
    Route::resource('technician','TechnicianController');
    Route::resource('model','VehicleModelsController');
    Route::resource('inspection','InspectionController');
    Route::resource('category','ServiceCategoryController');
    Route::resource('service','ServiceListController');
    Route::resource('steps','ServiceStepsController');
    Route::get('/inspection/data/{id}','InspectionController@getData');
});

//PDF
Route::get('checkup/pdf/{id}','PdfController@inspect');

Route::namespace('Transaction')->group(function() {

    Route::resource('checkup', 'InspectionCheckupController');
    Route::resource('maintenance','InspectionMaintenanceController');
    Route::resource('schedule','JobOrderScheduleController');
    Route::get('findCustomer', 'JobOrderScheduleController@findCustomer');
});


Route::get('job/final', 'JobOrderScheduleController@store');