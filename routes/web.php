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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {

        $summaries = \App\Models\Summarie::with('customer')->get();

        // dd($summaries);   

        return view('inicio',compact('summaries'));
    })->name('inicio');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/clientes', function () {
        return view('clientes.index');
    })->name('clientes');

    Route::get('/documentos/{customer_id}/cliente', function ($customer_id) {

      
        return view('documentos.clientes.index',compact('customer_id'));
    })->name('documentos');

    Route::get('/ejemplo', function () {
        return view('ejemplo');
    })->name('ejemplo');
});
