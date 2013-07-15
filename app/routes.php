<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/* sample url */
Route::get('users',function(){
  
  //return View::make('users');
  $users = User::all();
  return View::make('users')->with('users', $users);
});

/* force a route to be served over https */
Route::get('secure', array('https', function(){
  //
  return 'Must be over HTTPS';
}));
/*routes with parameters */
Route::get('user2/{id}', function($id)
{
    return 'User '.$id;
});
/* Optional route parameters */

Route::get('user3/{name?}', function($name = 'John')
{
    return $name;
});