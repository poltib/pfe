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
	return View::make('home.index');
}));

/*--------------------------------Races--------------------------------*/

Route::get('/races', array('as'=>'listRaces', function()
{
    return View::make('race.index');
}));

Route::get('/race/show', array('as'=>'showRace', function()
{
    return View::make('race.show');
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

/*--------------------------------Users--------------------------------*/

Route::get('/users', array('as'=>'listUsers', function()
{
    return View::make('user.index');
}));

Route::get('/user/show', array('as'=>'showUser', function()
{
    return View::make('user.show');
}));

Route::get('/user/register', array('as'=>'register', function()
{
    return View::make('user.register');
}));

/*--------------------------------News--------------------------------*/

Route::get('/news', array('as'=>'listNews', function()
{
    return View::make('news.index');
}));

Route::get('/news/show', array('as'=>'showNews', function()
{
    return View::make('news.show');
}));

/*--------------------------------Others--------------------------------*/

Route::get('/contact', array('as'=>'contact', function()
{
    return View::make('contact.index');
}));



