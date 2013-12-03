<?php 
    use UserRunInterface; 
    /**
    * 
    */
    class UserController extends BaseController
    {
        /**
        * User Repository
        */
        protected $user;

        /**
        * Inject the UserRun Interface Repository
        */
        public function __construct(UserRunInterface $user)
        {
        $this->user = $user;
        }

        public function index()
        {
            $users = $this->user->findAll();

            return View::make('users.index', compact('users'))->with('title', 'Liste des utilisateurs');
        }

        public function show($id)
        {
            $user = $this->user->findById($id);

            return View::make('users.show', compact('user'))->with('title', 'Profil de '.$user->username);
        }

        public function edit($id)
        {
            $user = $this->user->findById($id);

            return View::make('users.edit', compact('user'))->with('title', 'Modifier le profil');
        }

        public function update($id)
        {

            $this->user->update($id, Input::all());

            return Redirect::route('users.show', $id);
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

        public function raceParticip()
        {

            $this->user->raceParticip( Input::all() );
            return Redirect::route('races.show', Input::get('race_id'))
                ->with('flash_notice', 'The new raceUser has been created');
        }

        public function raceDontParticip($id)
        {

            $this->user->raceDontParticip( $id, Input::all() );
            return Redirect::route('races.show', Input::get('race_id'));
        }
        
    }