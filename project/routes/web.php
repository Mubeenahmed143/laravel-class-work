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
// Route::get('/about/{name}/{id}', function (string $name, int $id) {
//     return view('about')->with(compact('id','name'));
// });

Route::get('/', function () {
    return view('welcome');
})->name('welcomepage');

Route::get('/about', function () {
    return view('about');
})->name('aboutpage');

Route::get('/contact', function () {
    return view('contact');
})->name('contactpage');