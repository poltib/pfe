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
	        $xml = new SimpleXMLElement($race->tracer, Null, True);
	        $race->distance = $xml->Activities->Activity->Lap->DistanceMeters;

			$racePoints= [];
			foreach($xml->Activities->Activity->Lap->Track->Trackpoint as $child) {  
				array_push($racePoints, [$child->Position->LatitudeDegrees, $child->Position->LongitudeDegrees]);
			}
		}

		if($race->ext === "gpx"){
	        $xml = new SimpleXMLElement($race->tracer, Null, True);

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
