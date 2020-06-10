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

// Route Resource
Route::resource('properties', 'PropertiesController');
Route::resource('property-analytics', 'PropertyAnalyticsController');
Route::resource('analytic-types', 'AnalyticTypesController');

// Route API Resource
Route::apiResource('properties-api', 'API\PropertiesController');
Route::apiResource('property-analytics-api', 'API\PropertyAnalyticsController');
Route::apiResource('analytic-types-api', 'API\AnalyticTypesController');


