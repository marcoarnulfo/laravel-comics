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

    $comixs = config('db.comixs');
    //dd($comixs);

    $cards = config('db.cards');

    return view('welcome', compact('comixs','cards'));
})->name('welcome');
