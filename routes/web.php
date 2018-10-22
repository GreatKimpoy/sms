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
    Route::post('service/save' ,'ServiceListController@addSteps');
    Route::resource('customer', 'CustomerController');
    Route::resource('technician','TechnicianController');
    Route::resource('model','VehicleModelsController');
    Route::resource('inspection','InspectionController');
    Route::resource('category','ServiceCategoryController');
    Route::resource('service','ServiceListController');
    Route::resource('steps','ServiceStepsController');
    Route::get('/inspection/data/{id}','InspectionController@getData');
    Route::get('customers/update/{id}', 'PostController@edit');
    Route::put('customers/{id}', 'PostController@update');
});

//PDF
Route::get('checkup/pdf/{id}','PdfController@inspect');

Route::namespace('Transaction')->group(function() {
    Route::get('checkup/delete/{id}', 'InspectionCheckupController@delete');
    Route::resource('checkup', 'InspectionCheckupController');
    Route::resource('maintenance','InspectionMaintenanceController');
    Route::resource('schedule','JobOrderScheduleController');
    Route::get('findCustomer', 'JobOrderScheduleController@findCustomer');
    Route::get('findStep', 'JobOrderScheduleController@findStep');
    Route::get('servicePar', 'JobOrderScheduleController@serviceParts');

    Route::post('sequence/post', 'JobOrderScheduleController@updateSequence');
    Route::post('progress/post', 'JobOrderScheduleController@updateProgress');
    Route::post('start/post', 'JobOrderScheduleController@updateStart');
    Route::post('stopRequest', 'JobOrderScheduleController@stopRequest');
    Route::get('getProgress', 'JobOrderScheduleController@getProgress');



});


Route::get('job/final', 'JobOrderScheduleController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
