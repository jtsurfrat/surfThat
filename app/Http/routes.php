<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
/ = home
/tosurf - all lists
/tosurf/1 - show
/tosurf/edit and update
/tosurf/create
/tosurf/delete

Route::get('users', 'UserController@viewAll');
Route::get('users/create', 'UserController@create');
Route::post('users/create', 'UserController@postCreate');

*/

Route::get('/','ToSurfController@index');

Route::get('/tosurf','ToSurfController@index');

Route::get('/tosurf/{id}', 'ToSurfController@show');

Route::resource('tosurf', 'ToSurfController@index');



//Route::get('/', function(){
//     return View::make('tosurf.index');
// });

// Route::get('/tosurf', function(){
//     return View::make('tosurf.index');
// });

// Route::get('/tosurf/{id}', function($id){
//     return View::make('tosurf.show')->withId($id);
// });


    //few ways to make things
    // return View::make('welcome', array('name' => 'friend'));
    // return View::make('welcome')->with('name', 'friend');
    // return View::make('welcome')->withName('friend');



// Route::get("/welcome/{name?}", function($name = 'Bacon'){
//     return View::make('welcome')->with('name', $name);
// });



// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
