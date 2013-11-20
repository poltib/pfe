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
        $posts = $this->post->orderBy('created_at', 'desc')->paginate(4);

        $categories = Categorie::all();

        return View::make('posts.index', compact('posts', 'categories'))->with('title', 'Liste des actus');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Categorie::all();

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
		$input = Input::all();
        //$validation = Validator::make($input, Training::$rules);
        
        // if ($validation->passes())
        // {

            if($input["photo"]){
                $pictureName = Input::file('photo')->getClientOriginalName();
                Image::upload(Input::file('photo'), 'posts/' . Input::get('title'), true);
                $input["photo"] = 'http://pfe/uploads/posts/'.Input::get('title').'/600x400/'.$pictureName;
                $input["thumb"] = 'http://pfe/uploads/posts/'.Input::get('title').'/100x100_crop/'.$pictureName;
            }
            $this->post->create(array(
                'title' => Input::get('title'),
                'post' => Input::get('post'),
                'user_id' => Input::get('user_id'),
                'image' => $input["photo"],
                'thumb' => $input["thumb"]
            ));

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
        $post = $this->post->findOrFail($id);

        return View::make('posts.edit', compact('post'))->with('title', 'Modifier le post');
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
        $input = Input::all();

        $newPost = $this->post->find($id);
        if($input["photo"]){
            $pictureName = Input::file('photo')->getClientOriginalName();
            Image::upload(Input::file('photo'), 'posts/' . $newPost->id, true);
            $input["photo"] = 'http://pfe/uploads/posts/'.$newPost->id.'/600x400/'.$pictureName;
            $input["thumb"] = 'http://pfe/uploads/posts/'.$newPost->id.'/100x100_crop/'.$pictureName;
        }
        $newPost->update(array(
                'title' => Input::get('title'),
                'post' => Input::get('post'),
                'image' => $input["photo"],
                'thumb' => $input["thumb"]

            ));

        return Redirect::route('posts.show', $id);
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
        $this->post->find($id)->delete();

        return Redirect::route('posts.index');
	}

}
