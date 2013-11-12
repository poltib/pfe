<?php

class RacesController extends BaseController {

	/**
    * Race Repository
    */
    protected $race;

    /**
    * Inject the Race Repository
    */
    public function __construct(Race $race)
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

		$races = $this->race->all();

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
		$input = Input::all();
        //$validation = Validator::make($input, Training::$rules);

		$race = Input::file('race'); // your file upload input field in the form should be named 'file'

		$destinationPath = 'uploads/races';
		$extension =$race->getClientOriginalExtension(); //if you need extension of the file
		$filename = str_random(12).'.'.$extension;
		$uploadSuccess = Input::file('race')->move($destinationPath, $filename);
        
        // if ($validation->passes())
        // {
            $this->race->create(array(
            	'name'=>Input::get('name'),
            	'description'=>Input::get('description'),
            	'user_id'=>Input::get('user_id'),
            	'ext'=>$extension,
            	'race'=>$destinationPath."/".$filename
            	));

            return Redirect::route('races.index')
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
        $race = $this->race->findOrFail($id);


        if($race->ext === "tcx"){
	        $xml = new SimpleXMLElement($race->race, Null, True);
	        $race->distance = $xml->Activities->Activity->Lap->DistanceMeters;

			$racePoints= [];
			foreach($xml->Activities->Activity->Lap->Track->Trackpoint as $child) {  
				array_push($racePoints, [$child->Position->LatitudeDegrees, $child->Position->LongitudeDegrees]);
			}
		}

		if($race->ext === "gpx"){
	        $xml = new SimpleXMLElement($race->race, Null, True);

			$racePoints= [];
			foreach($xml->trk->trkseg->trkpt as $child) {  
				array_push($racePoints, [$child['lat'], $child['lon']]);
			}
		}
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
	}

}
