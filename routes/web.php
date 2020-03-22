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
    $user = factory(\App\User::class)->create();

    $user->phone()->create([
        'phone'=>'111-222-333-444',
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
