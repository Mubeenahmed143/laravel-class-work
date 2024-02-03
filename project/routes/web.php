<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentsController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcomepage');

// Route::get('/about', function () {
//     return view('about');
// })->name('aboutpage');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contactpage');

Route::get('/',[StudentsController::class,'home'])->name('homepage');
Route::get('/about',[StudentsController::class,'about'])->name('aboutpage');
Route::get('/contact',[StudentsController::class,'contact'])->name('contactpage');

