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

Route::post('/', array('as'=>'searchRace', function()
{
    $pays = Input::get('pays');
    $ville = Input::get('ville');
    $dist = Input::get('distance'); 
    return View::make('race.search')->with(array('pays'=>$pays, 'ville'=>$ville, 'distance'=>$dist));
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

Route::post('/clubs', array('as'=>'searchClubs', function()
{
    $pays = Input::get('pays');
    $ville = Input::get('ville');
    $dist = Input::get('entrainement');
    return View::make('club.search')->with(array('pays'=>$pays, 'ville'=>$ville, 'entrainement'=>$dist));
}));

/*--------------------------------Users--------------------------------*/

Route::get('/users', array('as'=>'listUsers', function()
{
    return View::make('user.index');
}));

Route::get('/users/group', array('as'=>'listUsersGroup', function()
{
    return View::make('user.group.index');
}));

Route::get('/users/group/show', array('as'=>'showUsersGroup', function()
{
    return View::make('user.group.show');
}));

Route::get('/user/show', array('as'=>'showUser', function()
{
    return View::make('user.show');
}));

Route::get('/user/register', array('as'=>'register', function()
{
    return View::make('user.register');
}));



Route::post('register', array('as'=>'registerUser', function()
{
    $username =  strtolower(Input::get('username'));
    $email = Input::get('email');
    User::create([
            'username' => $username,
            'email'=>$email,
            'password' => Hash::make(Input::get('password')),
            ]);

    $user = User::where('username', '=', $username)->first();

    Auth::login($user);

    if (Auth::attempt($user)) {
        return Redirect::route('home')
            ->with('flash_notice', 'Votre connexion s‘est effectuée avec succes.');
    }

    return Redirect::route('login')
            ->with('flash_error', 'vérifiez les champs.')
            ->withInput();
}));



Route::post('/users/group', function()
{
    return View::make('user.group.searchGroup');
});

Route::filter('guest', function()
{
        if (Auth::check()) 
                return Redirect::route('home')
                        ->with('flash_notice', 'Vous etes déjà connecté!');
});

Route::get('/user/login', array('as'=>'login', function()
{
    return View::make('user.login');
}))->before('guest');



Route::get('/user/notification', array('as'=>'notification', function()
{
    return View::make('user.notification');
}))->before('auth');



Route::post('login', function() 
{
    $user = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );
    
    if (Auth::attempt($user)) {
        return Redirect::route('home')
            ->with('flash_notice', 'Votre connexion s‘est effectuée avec succes.');
    }
    
    // authentication failure! lets go back to the login page
    return Redirect::route('login')
        ->with('flash_error', 'Votre combinaison nom/mot-de-passe est incorrecte.')
        ->withInput();
});



Route::filter('auth', function()
{
        if (Auth::guest())
                return Redirect::route('login')
                        ->with('flash_error', 'Vous devez être connecté pour voir cette page!');
});



Route::get('logout', array('as' => 'logout', function () 
{
    Auth::logout();

    return Redirect::route('home')
        ->with('flash_notice', 'Votre déconnection est un succes.');
}))->before('auth');



Route::get('user/profile', array('as' => 'profile', function () {
    return View::make('user.profile');
}))->before('auth');

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



