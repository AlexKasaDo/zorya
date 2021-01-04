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

Route::get('/', function () { return view('home');})->name('index');

Route::get('/home', function () { return view('home');})->name('home');

Route::get('/vacancies', function () { return view('vacancies');})->name('vacancies');

Route::get('/gallery', function () { return view('galler');})->name('gallery');

Route::get('/new', function () { return view('new');})->name('new');


Route::get('/delicacies', function () { return view('delicacies');})->name('delicacies');



