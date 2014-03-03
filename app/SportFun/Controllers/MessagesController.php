<?php namespace SportFun\Controllers;

use SportFun\Repositories\Message\MessageInterface as MessageInterface;

use \View;
use \Input;
use \Redirect;

class MessagesController extends BaseController
{
	/**
    * MessageInterface Repository
    */
    protected $message;

    /**
    * Inject the MessageInterface Repository
    */
    public function __construct(MessageInterface $message)
    {
    	$this->message = $message;
    }

    public function index()
    {
        $messages = $this->message->findAll()->paginate(7);

        return View::make('messages.index', compact('messages'))->with('title', 'Liste des messages');
	}

	/**
	 * Show the form for creating a new resource with the user_id.
	 *
	 * @param  int  $user_id
	 * @return Response
	 */
	public function send($user_id)
	{
        return View::make('messages.send')->with('user_id', $user_id);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  int  $user_id
	 * @return Response
	 */
	public function create($user_id)
	{
        return View::make('messages.create')->with('user_id', $user_id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        //$validation = Comment::validate($input, Comment::$rules, Comment::$messages);
        
        // if ($validation->passes())
        // {
        $this->message->store( Input::all() );

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
        $message = $this->message->findById($id);

        return View::make('messages.show', compact('message'))->with('title', 'Profil de '.$message->objet);
	}



    /**
     * Display the specified conversation.
     *
     * @param  int  $id
     * @return Response
     */
    public function conv($id, $from)
    {
        $message = $this->message->findConv($id, $from);

        return View::make('messages.conv', compact('message'))->with('title', 'Profil de '.$message->objet);
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
