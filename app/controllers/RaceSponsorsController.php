<?php

class RaceSponsorsController extends BaseController {

    /**
    * RaceSponsor Repository
    */
    protected $raceSponsor;

    /**
    * Inject the RaceSponsor Repository
    */
    public function __construct(RaceSponsor $raceSponsor)
    {
    $this->raceSponsor = $raceSponsor;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('raceSponsors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('raceSponsors.create');
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
            if($input["image"]){
                $pictureName = Input::file('image')->getClientOriginalName();
                Image::upload(Input::file('image'), 'races/' . $input["race_id"].'/sponsors', true);
                $input["image"] = 'http://pfe/uploads/races/'.$input["race_id"].'/sponsors/600x400/'.$pictureName;
                $input["thumb"] = 'http://pfe/uploads/races/'.$input["race_id"].'/sponsors/100x100_crop/'.$pictureName;
            }

            $this->raceSponsor->create($input);

            return Redirect::route('races.show', Input::get('race_id'));
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
        return View::make('raceSponsors.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('raceSponsors.edit');
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
        $this->raceUser->find($id)->delete();

        return Redirect::route('races.show', Input::get('race_id'));
    }

}
