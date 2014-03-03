<?php
use RaceInterface;

class RaceImagesController extends BaseController
{
    /**
    * RaceInterface Repository
    */
    protected $raceImage;

    /**
    * Inject the RaceInterface Repository
    */
    public function __construct(RaceInterface $raceImage)
    {
        $this->raceImage = $raceImage;
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        $image = $this->raceImage->storeImage( Input::all() );
        //$validation = Comment::validate($input, Comment::$rules, Comment::$messages);
        
        // if ($validation->passes())
        // {

            return Redirect::route('races.show', Input::get('race_id'));
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
        $this->raceUser->find($id)->delete();

        return Redirect::route('races.show', Input::get('race_id'));
    }

}
