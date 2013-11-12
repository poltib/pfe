<?php 

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
        * Inject the User Repository
        */
        public function __construct(User $user)
        {
        $this->user = $user;
        }

        public function index()
        {
            $users = $this->user->all();

            return View::make('users.index', compact('users'))->with('title', 'Liste des utilisateurs');
        }

        public function show($id)
        {
            $user = $this->user->findOrFail($id);

            return View::make('users.show', compact('user'))->with('title', 'Profil de '.$user->username);
        }

        public function edit($id)
        {
            $user = $this->user->findOrFail($id);

            return View::make('users.edit', compact('user'))->with('title', 'Modifier le profil');
        }

        public function update($id)
        {
            $input = array_except(Input::all(), '_method');

            $user = $this->user->find($id);
            if($input["photo"]){
                $pictureName = Input::file('photo')->getClientOriginalName();
                Image::upload(Input::file('photo'), 'users/' . $user->id, true);
                $input["photo"] = 'http://pfe/uploads/users/'.$user->id.'/600x400/'.$pictureName;
                $input["thumbs"] = 'http://pfe/uploads/users/'.$user->id.'/100x100_crop/'.$pictureName;
            }
            $user->update(array(
                    'username' => Input::get('username'),
                    'first_name' => Input::get('first_name'),
                    'email' => Input::get('email'),
                    'photo' => $input["photo"],
                    'thumbs' => $input["thumbs"]

                ));

            return Redirect::route('users.show', $id);
        }



        public function create()
        {
            return View::make('users.create');
        }


        public function store()
        {
            $input = Input::all();
            $validation = Validator::make($input, User::$rules);
            

            if ($validation->passes())
            {
                $this->user->create(array('username'=>Input::get('username'),'email'=>Input::get('email'),'password'=>Hash::make(Input::get('password'))));

                return Redirect::route('login')
                ->with('flash_notice', 'The new user has been created');
            }
            return Redirect::route('users.create')
              ->withInput()
              ->withErrors($validation->errors());
        }


        public function postProfile()
        {
            $input = array_except(Input::all(), '_method');
            $id = Input::get('id');
            $user = $this->user->find($id);
            $user->update($input);

            return Redirect::route('profile');
        }
        
    }