<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RHController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
    
    
});*/

//Route::resource('employes', RHController::class);

Route::get('/', [RHController::class, 'index']);

Route::get('/ajout', function () {
    return view('form_ajout');
});
