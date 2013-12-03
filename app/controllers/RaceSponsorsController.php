<?php
use RaceInterface; 

class RaceSponsorsController extends BaseController {

    /**
    * RaceInterface Repository
    */
    protected $raceSponsor;

    /**
    * Inject the RaceInterface Repository
    */
    public function __construct(RaceInterface $raceSponsor)
    {
        $this->raceSponsor = $raceSponsor;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        $input = $this->raceSponsor->storeSponsor( Input::all() );
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
