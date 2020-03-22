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

    // create
    $user->posts()->create([
        'title'=>'new post',
        'body'=>'new body',
    ]);

    // update
    $user->posts->first()->title = 'new better title';

    $user->push();
    return $user->posts;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
