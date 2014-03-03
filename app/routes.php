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

// Event::listen('illuminate.query', function($sql)
// {
//     var_dump($sql);
//     echo ('<br><br><br>');
// });


Route::get('/', array('as' => 'home', 'uses' => 'SportFun\Controllers\HappeningsController@home'));

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

Route::resource('users','SportFun\Controllers\UserController');

Route::get('logout', array('as' => 'logout', 'uses' => 'SportFun\Controllers\UserController@logout'))->before('auth');

Route::get('login', array('as' => 'login', 'uses' => 'SportFun\Controllers\UserController@login'))->before('guest');

Route::post('login', array('as' => 'connection', 'uses' => 'SportFun\Controllers\UserController@connection'))->before('guest');

Route::post('raceUsers/{slug}', array('as' => 'particip', 'uses' => 'SportFun\Controllers\UserController@raceParticip'));

Route::post('raceUsersDestroy/{slug}', array('as' => 'dontParticip', 'uses' => 'SportFun\Controllers\UserController@raceDontParticip'));

// Password Resets
Route::get('password_resets/reset/{token}', 'SportFun\Controllers\PasswordResetsController@reset');

Route::post('password_resets/reset/{token}', 'SportFun\Controllers\PasswordResetsController@postReset');

Route::resource('password_resets', 'SportFun\Controllers\PasswordResetsController', ['only' => ['create', 'store']]);


/*--------------------------------Others--------------------------------*/

Route::get('/contact', array('as'=>'contact', function()
{
    return View::make('contact.index');
}));

//Route::resource('trainings', 'SportFun\Controllers\TrainingsController');

Route::resource('happenings', 'SportFun\Controllers\HappeningsController');

//Route::get('/download/{path}', 'SportFun\Controllers\HappeningsController@getDownload');

//Route::resource('comments', 'SportFun\Controllers\CommentsController');

//Route::resource('raceUsers', 'RaceUsersController');

//Route::resource('raceImages', 'SportFun\Controllers\RaceImagesController');

//Route::resource('raceSponsors', 'SportFun\Controllers\RaceSponsorsController');

Route::resource('posts', 'SportFun\Controllers\PostsController');

Route::resource('forums', 'SportFun\Controllers\ForumsController');

Route::get('messages/send/{id}', 'SportFun\Controllers\MessagesController@send');

Route::get('messages/conv/{id}/{from}', array( 'as' => 'conv', 'uses' => 'SportFun\Controllers\MessagesController@conv' ));

Route::resource('messages', 'SportFun\Controllers\MessagesController');


Route::resource('categories', 'SportFun\Controllers\CategoriesController');

Route::resource('teams', 'SportFun\Controllers\TeamsController');


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