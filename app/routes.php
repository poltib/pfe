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

Route::get('/', array('as'=>'home', function()
{
	return View::make('home.index')->with('title', 'home');
}));

Route::post('/', array('as'=>'searchRace', function()
{
    $pays = Input::get('pays');
    $ville = Input::get('ville');
    $dist = Input::get('distance'); 
    return View::make('race.search')->with(array('pays'=>$pays, 'ville'=>$ville, 'distance'=>$dist));
}));



/*--------------------------------Clubs--------------------------------*/

Route::get('/clubs', array('as'=>'listClubs', function()
{
    return View::make('club.index');
}));

Route::get('/clubs/show', array('as'=>'showClubs', function()
{
    return View::make('club.show');
}));

Route::post('/clubs', array('as'=>'searchClubs', function()
{
    $pays = Input::get('pays');
    $ville = Input::get('ville');
    $dist = Input::get('entrainement');
    return View::make('club.search')->with(array('pays'=>$pays, 'ville'=>$ville, 'entrainement'=>$dist));
}));

/*--------------------------------Users--------------------------------*/

Route::resource('users','UserController');

Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'))->before('auth');

Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'))->before('guest');

Route::post('login', array('as' => 'connexion', 'uses' => 'UserController@connexion'))->before('guest');

Route::post('raceUsers', array('as' => 'particip', 'uses' => 'UserController@raceParticip'));

Route::delete('raceUsersDestroy/{userId}', array('as' => 'dontParticip', 'uses' => 'UserController@raceDontParticip'));



/*--------------------------------Others--------------------------------*/

Route::get('/contact', array('as'=>'contact', function()
{
    return View::make('contact.index');
}));




Route::resource('trainings', 'TrainingsController');

Route::resource('races', 'RacesController');

Route::resource('comments', 'CommentsController');

//Route::resource('raceUsers', 'RaceUsersController');

Route::resource('raceImages', 'RaceImagesController');

Route::resource('raceSponsors', 'RaceSponsorsController');

Route::resource('posts', 'PostsController');

Route::get('messages/send/{id}', 'MessagesController@send');

Route::resource('messages', 'MessagesController');


Route::resource('categories', 'CategoriesController');