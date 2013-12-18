<?php
use RaceInterface; 

class RacesController extends BaseController {

	/**
    * RaceInterface Repository
    */
    protected $race;

    /**
    * Inject the RaceInterface Repository
    */
    public function __construct(RaceInterface $race)
    {
    $this->race = $race;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$races = $this->race->findAll();

        return View::make('races.index', compact('races'))->with('title', 'Liste des courses');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('races.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$race = $this->race->store( Input::all() );

        //$validation = Validator::make($input, Training::$rules);

            return Redirect::route('races.show', $race['id'])
            ->with('flash_notice', 'The new race has been created');
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
        $raceAndPoints = $this->race->findById($id);
        $race = $raceAndPoints['race'];
        $racePoints = $raceAndPoints['racePoints'];
        return View::make('races.show', compact('race','racePoints'))->with('title', $race->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('races.edit');
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
        $this->race->destroy($id);
        return Redirect::route('races.index')
            ->with('flash_notice', 'The race has been deleted');
	}

}
