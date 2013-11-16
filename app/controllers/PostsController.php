<?php

class PostsController extends BaseController {
	/**
    * Post Repository
    */
    protected $post;

    /**
    * Inject the Post Repository
    */
    public function __construct(Post $post)
    {
    $this->post = $post;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->post->all();

        return View::make('posts.index', compact('posts'))->with('title', 'Liste des actus');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('posts.create');
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
        //$validation = Validator::make($input, Training::$rules);
        
        // if ($validation->passes())
        // {
            $this->post->create($input);

            return Redirect::route('races.index')
            ->with('flash_notice', 'The new post has been created');
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

		$post = $this->post->findOrFail($id);
        
        return View::make('posts.show', compact('post'))->with('title', $post->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('posts.edit');
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
