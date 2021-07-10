<?php

use Illuminate\Support\Facades\Route;

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


// tasks routes

Route::get('add', 'taskcontroller@add');

Route::get('edittask/{id}','taskcontroller@edittask');

Route::post('updatetask','taskcontroller@updatetask');

Route::post('addtask', 'taskcontroller@addtask');

Route::get('deletetask/{id}', 'taskcontroller@deletetask');


//user routes

// Route::get('signup', 'taskcontroller@signup');

// Route::post('submitsignup', 'taskcontroller@submitsignup');


Route::resource('user', 'operationscontroller');










