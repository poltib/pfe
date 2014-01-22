<?php
use RaceInterface;

class CommentsController extends BaseController {

	/**
    * RaceInterface Repository
    */
    protected $comment;

    /**
    * Inject the RaceInterface Repository
    */
    public function __construct(RaceInterface $comment)
    {
        $this->comment = $comment;
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

            $this->comment->storeComment( Input::all() );

            return Redirect::route('races.show', Input::get('race_id'))
            ->with('flash_notice', 'The new comment has been created');
        // }
        // return Redirect::route('trainings.create')
        //       ->withInput()
        //       ->withErrors($validation->errors());
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
        $this->comment->destroyComment($id);

        return Redirect::route('races.show', Input::get('race_id'));
	}

}
