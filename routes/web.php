<?php

use App\Http\Controllers\IndexController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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

//CONTACT

    Route::get('contact','ContactController@create');
    Route::post('contact','ContactController@store');

    Auth::routes();
    Route::resource('index', 'IndexController');
    Route::patch('/','IndexController@store');
    Route::get('/',function(){

        return view('welcome');
    });



    Route::get('/','IndexController@index');
    Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'momo'], function () {
    Voyager::routes();
});


//BLOG
Route::get('/blog', 'BlogController@index')->name('blog');


