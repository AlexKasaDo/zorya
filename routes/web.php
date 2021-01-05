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

Route::get('/sausages', function () { return view('sausages');})->name('sausages');

Route::get('/bigsausages', function () { return view('bigsausages');})->name('bigsausages');

Route::get('/ham', function () { return view('ham');})->name('ham');

Route::get('semi_smoked', function () { return view('semi_smoked');})->name('semi_smoked');

Route::get('cheese_smoked', function () { return view('cheese_smoked');})->name('cheese_smoked');

Route::get('specorder', function () { return view('specorder');})->name('specorder');

Route::get('ready_to_cook_food', function () { return view('ready_to_cook_food');})->name('ready_to_cook_food');


Route::get('highest_class', function () { return view('highest_class');})->name('highest_class');

Route::get('first_class', function () { return view('first_class');})->name('first_class');







