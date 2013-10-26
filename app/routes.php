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

Route::get('/races', array('as'=>'listRaces', function()
{
    return View::make('race.index');
}));

Route::get('/clubs', array('as'=>'listClubs', function()
{
    return View::make('club.index');
}));

Route::get('/users', array('as'=>'listUsers', function()
{
    return View::make('user.index');
}));

Route::get('/contact', array('as'=>'contact', function()
{
    return View::make('contact.index');
}));

Route::get('/news', array('as'=>'listNews', function()
{
    return View::make('news.index');
}));

