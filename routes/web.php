<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FoodController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'role:admin'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('roles.admin.index');
//     })->name('dashboard');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'role:Paciente'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('roles.paciente.index');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
            if (auth()->user()->role_id == 1) {
                return view('roles.admin.index');
            }
            else {
                if (auth()->user()->role_id == 2) {
                    return view('roles.paciente.index');
                }
                else {
                    if (auth()->user()->role_id == 3) {
                        return view('roles.nutricionista.index');
                    }
                }
            }
        }
        )->name('dashboard');

        Route::get('/subscription', function () {
            if (auth()->user()->role_id == 3) {
                return view('roles.nutricionista.subscription');
            }
            else {
                return '403';
            }
        }
        )->name('subscription');

        Route::get('/chat', function () {
            if (auth()->user()->role_id == 3 || auth()->user()->role_id == 2 || auth()->user()->role_id == 1) {
                return redirect('/chatify');
            }
            else {
                return 'FORBIDDEN';
            }
        }
        )->name('chat');

        Route::get('/dashboard/charts', function () {
            if (auth()->user()->role_id == 1) {
                return view('roles.admin.charts');
            }
            else {
                return 'FORBIDDEN';
            }
        }
        )->name('dashboard.charts');




        Route::resource('admin/users', UserController::class)->names('roles.admin.users');
        Route::resource('food', FoodController::class)->names('food');
    });


Route::get('/registernutri', function () {
    return view('auth.registernutri');
})->name('registerNutri');


// Route::group(['middleware'=> 'auth'], function(){
//     Route::group(['middleware' => 'role:paciente', 'prefix' => 'paciente', 'as' => 'paciente.'], function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\PacienteController::class);
//     });

//     Route::group(['middleware' => 'role:nutricionista', 'prefix' => 'nutricionista', 'as' => 'nutricionista.'], function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\NutricionistaController::class);
//     });

//     Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
//         Route::resource('dashboard', \app\Http\Controllers\Paciente\AdminController::class);
//     });
// });