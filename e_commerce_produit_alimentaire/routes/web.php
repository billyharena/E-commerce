<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/client', function (){
    return view('client.loginClient');
})->name('client');
Route::get('/Registerclient', function (){
    return view('client.registerClient');
})->name('Registerclient');

Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::post('/adminPortails', 'App\Http\Controllers\LoginController@loginAdmin')->name('loginAdmin');
Route::post('/registrationClient', 'App\Http\Controllers\LoginController@registerClient')->name('registration');

Route::middleware(['admin'])->group(function (){
    Route::get('/admin/listeProduit', 'App\Http\Controllers\ProduitController@_listeProduit')->name('listeProduit');
});
