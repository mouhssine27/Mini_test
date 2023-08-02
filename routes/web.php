<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\RobotController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ComponentController;

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


Route::get('/', [EmployeeController::class, 'index'])->name('getEmployeur');
Route::get('/robots', [RobotController::class, 'index'])->name('getrobots');
Route::get('/models', [ModelController::class, 'index'])->name('getModels');

Route::get('/component', [ComponentController::class, 'index'])->name('getComponents');

Route::post('/storeEmployee', [EmployeeController::class, 'store'])->name('storeEmployee');
Route::post('/storeRobot', [RobotController::class, 'store'])->name('storeRobot');
Route::post('/storeModel', [ModelController::class, 'store'])->name('storeModel');
Route::post('/storeComponents', [ComponentController::class, 'store'])->name('storeComponent');



Route::post('/updateEmployeur/{id}', [EmployeeController::class, 'updateEmployeur'])->name('updateEmployeur');
Route::post('/updateModele/{id}', [ModelController::class, 'updateModele'])->name('updateModele');
Route::post('/updateRobot/{id}', [RobotController::class, 'updateRobot'])->name('updateRobot');
Route::post('/updateComponent/{id}', [ComponentController::class, 'updateComponent'])->name('updateComponent');

Route::post('/deleteEmployeur/{id}', [EmployeeController::class, 'destroy'])->name('deleteEmployeur');
Route::post('/deleteModele/{id}', [ModelController::class, 'destroy'])->name('deleteModele');
Route::post('/deleteRobot/{id}', [RobotController::class, 'destroy'])->name('deleteRobot');
Route::post('/deleteComponent/{id}', [ComponentController::class, 'destroy'])->name('deleteComponent');