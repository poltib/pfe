<?php namespace SportFun\Controllers;

use SportFun\Repositories\User\UserSportInterface;
use \View;
use \Input;
use \Auth;
use \Redirect;
use \Calendar;
use \Request;

class UserController extends BaseController
{
    /**
    * User Repository
    */
    protected $user;

    /**
    * Inject the UserRun Interface Repository
    */
    public function __construct(UserSportInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->findAll();

        return View::make('users.index', compact('users'))->with('title', 'Liste des utilisateurs');
    }

    public function show($slug)
    {
        $user = $slug;

        $config = array(
            'lang' => '',
            'start_day' => 'monday',
            'month_type' => 'long',
            'show_next_prev' => true
        );

        Calendar::initialize($config);

        if( Request::get( 'month' ) && Request::get( 'year' )  ){
            $month = Request::get( 'month' );
            $year = Request::get( 'year' );
        }else{
            $month = MONTH;
            $year = YEAR;
        }

        return View::make('users.show', compact('user', 'month', 'year'))->with('title', 'Profil de '.$user->username);
    }

    public function edit($slug)
    {
        $user = $slug;

        return View::make('users.edit', compact('user'))->with('title', 'Modifier le profil');
    }

    public function update($slug)
    {

        $this->user->update($slug->id, Input::all());

        return Redirect::route('users.show', $slug->slug);
    }



    public function create()
    {
        return View::make('users.create');
    }


    public function store()
    {

        $user = $this->user->store( Input::all() );
        if($user['validation'])
        {
            return Redirect::route('login')
              ->with('flash_notice', 'The new user has been created');
        }
        return Redirect::route('users.create')
          ->withInput()
          ->withErrors($user['error']->errors());
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('home')
            ->with('flash_notice', 'Votre déconnection est un succes.');
    }

    public function login()
    {
        return View::make('users.login');
    }

    public function connection()
    {

        $user = $this->user->connection( Input::all() );
        if( $user )
        {
            return Redirect::route('home')
                ->with('flash_notice', 'Votre connexion s\'est effectuée avec succes.');
        }
        return Redirect::route('login')
            ->with('flash_error', 'Votre combinaison nom/mot-de-passe est incorrecte.')
            ->withInput();
    }

    public function raceParticip($slug)
    {

        $this->user->raceParticip( Input::all() );
        return Redirect::route('happenings.show', $slug)
            ->with('flash_notice', 'The new raceUser has been created');
    }

    public function raceDontParticip($slug)
    {
        $this->user->raceDontParticip( Input::all() );
        return Redirect::route('happenings.show', $slug);
    }

}