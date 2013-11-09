<?php

class TrainingsController extends BaseController {
	/**
    * Training Repository
    */
    protected $training;

    /**
    * Inject the Training Repository
    */
    public function __construct(Training $training)
    {
    $this->training = $training;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $trainings = $this->training->all();

        return View::make('trainings.index', compact('trainings'))->with('title', 'Liste des entrainements');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('trainings.create');
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

		$training = Input::file('training'); // your file upload input field in the form should be named 'file'

		$destinationPath = 'uploads/trainings';
		$extension =$training->getClientOriginalExtension(); //if you need extension of the file
		$filename = str_random(12).'.'.$extension;
		$uploadSuccess = Input::file('training')->move($destinationPath, $filename);
        
        // if ($validation->passes())
        // {
            $this->training->create(array(
            	'name'=>Input::get('name'),
            	'description'=>Input::get('description'),
            	'user_id'=>Input::get('user_id'),
            	'ext'=>$extension,
            	'training'=>$destinationPath."/".$filename
            	));

            return Redirect::route('trainings.index')
            ->with('flash_notice', 'The new training has been created');
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
        $training = $this->training->findOrFail($id);


        if($training->ext === "tcx"){
	        $xml = new SimpleXMLElement($training->training, Null, True);
	        $training->distance = $xml->Activities->Activity->Lap->DistanceMeters;

			$trainingPoints= [];
			foreach($xml->Activities->Activity->Lap->Track->Trackpoint as $child) {  
				array_push($trainingPoints, [$child->Position->LatitudeDegrees, $child->Position->LongitudeDegrees]);
			}
		}

		if($training->ext === "gpx"){
	        $xml = new SimpleXMLElement($training->training, Null, True);

			$trainingPoints= [];
			foreach($xml->trk->trkseg->trkpt as $child) {  
				array_push($trainingPoints, [$child['lat'], $child['lon']]);
			}
		}

        return View::make('trainings.show', compact('training','trainingPoints'))->with('title', $training->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('trainings.edit');
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
