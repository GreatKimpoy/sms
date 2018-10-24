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
Route::resource('joreport', 'jobReportController',['only' => [
            'index','store']]);
Route::post('joreport/filter','jobReportController@filter');




Route::resource('prodreport', 'prodReportController',['only' =>[
                'index','store']]);
Route::post('prodreport/filter','prodReportController@filter');
Route::get('prodreport/pdf', 'PdfController@prod');

Route::resource('appointreport', 'appointController',['only' =>[
                'index','store']]);
Route::post('appointreport/filter','appointController@filter');
Route::get('appointreport/pdf', 'PdfController@appoint');


//Route::resource('report','ReportController',['only' => [
            //'index','store']]);
//Route::post('report/filter','ReportController@filter');


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
Route::get('schedule/pdf/{id}','PdfController@jobs');

Route::namespace('Transaction')->group(function() {
    Route::put('checkups/{id}', 'DeleteController@destroy');
    Route::put('jobs/{id}', 'DeleteController@delete');
    Route::resource('checkup', 'InspectionCheckupController');
    Route::resource('maintenance','InspectionMaintenanceController');
    Route::resource('schedule','JobOrderScheduleController');
    Route::get('findCustomer', 'JobOrderScheduleController@findCustomer');
    Route::get('findStep', 'JobOrderScheduleController@findStep');
    Route::get('servicePar', 'JobOrderScheduleController@serviceParts');

    Route::post('sequence/post', 'JobOrderScheduleController@updateSequence');
    Route::post('progress/post', 'JobOrderScheduleController@updateProgress');
    Route::post('start/post', 'JobOrderScheduleController@updateStart');
    Route::post('startRequest', 'JobOrderScheduleController@startRequest');
    Route::post('stopRequest', 'JobOrderScheduleController@stopRequest');
    Route::get('getProgress', 'JobOrderScheduleController@getProgress');
    Route::post('updateStatus', 'JobOrderScheduleController@updateStatus');


});


Route::get('job/final', 'JobOrderScheduleController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
