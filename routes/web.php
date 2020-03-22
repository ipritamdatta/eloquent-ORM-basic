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
    $user = \App\User::first();

    // $user->roles()->syncWithoutDetaching([3]);

    // $role = \App\Role::find(4);

    // $role->users()->sync([1]);

    // $user = \App\User::first();
    
    // $user->roles()->attach([2,4,5]);
    
    // $role = \App\Role::find(2);

    // $user->roles()->detach($role);

    // $role = \App\Role::find(4);
    // $role->users()->sync([5]);

    // $user = \App\User::first();

    // $user->roles()->sync(
    //     [
    //         1 =>[
    //             'name'=>'pritam'
    //         ]
    //     ]
    // );

    $user = \App\User::first();

    dd($user->roles->find(1)->pivot->name);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
