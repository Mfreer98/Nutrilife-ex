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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::group(['middleware'=> 'auth'], function(){
//     Route::group(['middleware' => 'role:paciente', 'prefix' => 'paciente', 'as' => 'paciente.', function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\PacienteController::class);
//     }]);

//     Route::group(['middleware' => 'role:nutricionista', 'prefix' => 'nutricionista', 'as' => 'nutricionista.', function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\NutricionistaController::class);
//     }]);

//     Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.', function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\AdminController::class);
//     }]);
// });