<?php

App::bind('UserRunInterface', 'UserRepository');
App::bind('HappeningInterface', 'HappeningRepository');
App::bind('TeamInterface', 'TeamRepository');
App::bind('MessageInterface', 'MessageRepository');
App::bind('PostInterface', 'PostRepository');
App::bind('CategorieInterface', 'CategorieRepository');
App::bind('ForumInterface', 'ForumRepository');

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

// Event::listen('illuminate.query', function($sql)
// {
//     var_dump($sql);
//     echo ('<br><br><br>');
// });


Route::get('/', array('as' => 'home', 'uses' => 'HappeningsController@home'));

Route::get('/404', array('as'=>'404', function()
{
    return View::make('404')->with('title', '404 not found');
}));

Route::post('/', array('as'=>'searchRace', function()
{
    $pays = Input::get('pays');
    $ville = Input::get('ville');
    $dist = Input::get('distance'); 
    return View::make('race.search')->with(array('pays'=>$pays, 'ville'=>$ville, 'distance'=>$dist));
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

Route::post('login', array('as' => 'connection', 'uses' => 'UserController@connection'))->before('guest');

Route::post('raceUsers/{slug}', array('as' => 'particip', 'uses' => 'UserController@raceParticip'));

Route::post('raceUsersDestroy/{slug}', array('as' => 'dontParticip', 'uses' => 'UserController@raceDontParticip'));

// Password Resets
Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');
Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');
Route::resource('password_resets', 'PasswordResetsController', ['only' => ['create', 'store']]);


/*--------------------------------Others--------------------------------*/

Route::get('/contact', array('as'=>'contact', function()
{
    return View::make('contact.index');
}));




Route::resource('trainings', 'TrainingsController');

Route::resource('happenings', 'HappeningsController');

Route::get('/download/{path}', 'HappeningsController@getDownload');

Route::resource('comments', 'CommentsController');

//Route::resource('raceUsers', 'RaceUsersController');

Route::resource('raceImages', 'RaceImagesController');

Route::resource('raceSponsors', 'RaceSponsorsController');

Route::resource('posts', 'PostsController');

Route::resource('forums', 'ForumsController');

Route::get('messages/send/{id}', 'MessagesController@send');

Route::get('messages/conv/{id}/{from}', array( 'as' => 'conv', 'uses' => 'MessagesController@conv' ));

Route::resource('messages', 'MessagesController');


Route::resource('categories', 'CategoriesController');

Route::resource('teams', 'TeamsController');


Route::bind('happenings',function($value,$route)
{
        return Happening::where('slug','=',$value)->first();
});

Route::bind('posts',function($value,$route)
{
        return Post::where('slug','=',$value)->first();
});

Route::bind('users',function($value,$route)
{
        return User::where('slug','=',$value)->first();
});

Route::bind('teams',function($value,$route)
{
        return Team::where('slug','=',$value)->first();
});