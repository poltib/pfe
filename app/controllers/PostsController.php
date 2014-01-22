<?php
use PostInterface;
use CategorieInterface;


class PostsController extends BaseController {
	/**
    * PostInterface Repository
    */
    protected $post;

    /**
    * Inject the PostInterface Repository
    */
    public function __construct(PostInterface $post, CategorieInterface $categorie)
    {
    $this->post = $post;
    $this->categorie = $categorie;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->post->findAll();

        $categories = $this->categorie->findAll();

        return View::make('posts.index', compact('posts', 'categories'))->with('title', 'Liste des actus');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::all();

        return View::make('posts.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$this->post->store( Input::all() );
        //$validation = Validator::make($input, Training::$rules);
        
        // if ($validation->passes())
        // {

            return Redirect::route('posts.index')
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
	public function show($slug)
	{

		$post = $slug;
        
        return View::make('posts.show', compact('post'))->with('title', $post->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
        $post = $slug;

        $categories = $this->categorie->findAll();

        return View::make('posts.edit', compact('post','categories'))->with('title', 'Modifier le post');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		//

        $this->post->update( $slug->id, Input::all() );

        return Redirect::route('posts.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
        $this->post->destroy( $slug->id );

        return Redirect::route('posts.index');
	}

}
