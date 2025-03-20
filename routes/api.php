<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group([
    "prefix" => "cars",
    "controller" => CarController::class
], function() {

});

Route::group([
    "prefix" => "services",
    "controller" => ServiceController::class
], function() {

});

Route::group([
    "prefix" => "mechanics",
    "controller" => MechanicController::class
], function() {

});