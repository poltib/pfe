<?php

class MessagesController extends BaseController {

	/**
    * Message Repository
    */
    protected $message;

    /**
    * Inject the Message Repository
    */
    public function __construct(Message $message)
    {
    $this->message = $message;
    }

    public function index()
    {
        $messages = $this->message->orderBy('created_at', 'desc')->get();

        return View::make('messages.index', compact('messages'))->with('title', 'Liste des messages');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('messages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input = Input::all();
        //$validation = Comment::validate($input, Comment::$rules, Comment::$messages);
        
        // if ($validation->passes())
        // {

            $this->message->create(array(
            		'objet' => Input::get('objet'),
                    'message' => Input::get('message'),
                    'from' => Input::get('from')
            	));

            $newMessage = $this->message->orderBy('created_at', 'desc')->first();
            $newMessage->to()->attach(Input::get('user_id'));

            return Redirect::route('messages.index')
            ->with('flash_notice', 'The new message has been send');
        // }
        // return Redirect::route('trainings.create')
        //       ->withInput()
        //       ->withErrors($validation->errors());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('messages.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('messages.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
