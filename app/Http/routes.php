<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/ytf/{id}', 'StudentController@test')->where('id','[0-9]+');
Route::get('/ytf/query', 'StudentController@query');
Route::get('/ytf/query2', 'StudentController@query2');

/*
|---  -----------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/',array('as'=>'login', function () {
         $mes ="";
         return view('login',compact('mes'));
    }));
    Route::post('/login', 'UserController@login');
    Route::get('/index',array('as'=>'index', function()
    {
         return view('index');
    }));
    Route::get('/welcome',array('as'=>'welcome', function()
    {
         return view('welcome');
    }));
    Route::get('/life/index','LifeMoneyController@item')->name('life_index');
    Route::post('/life/delete/{id}','LifeMoneyController@delete')->where('id','[0-9]+')->name('life_delete');
    Route::post('/life/add','LifeMoneyController@add')->name('life_add');
});
