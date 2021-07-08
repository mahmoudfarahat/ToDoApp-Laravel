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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/show/{id?}', function ($i = null) {
   echo "welcome .....".$i ;
})->where('id','[0-9]+');

Route::any('/show/{id?}', function ($i = null) {
   echo "welcome .....".$i ;
})->where('id','[0-9]+');

// Route::get('/add', function () {
//     return view('addtask');
//   });

Route::get('add', 'taskcontroller@add');

Route::get('signup', 'taskcontroller@signup');

Route::post('submitsignup', 'taskcontroller@submitsignup');

Route::get('tasks', 'taskcontroller@taskData');



