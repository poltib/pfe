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
        return View::make('trainings.index');
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

        $xml = new SimpleXMLElement(Input::get('training'), Null, True);  

		$nodes = $xml->xpath('//TrainingCenterDatabase/Activities/Activity/Lap/Track/Trackpoint/Position');  

		$training = [];
		  
		foreach($nodes as $cords) {  
			array_puch($training, [$cords->LatitudeDegrees, $cords->LongitudeDegrees]);
		}
        
        // if ($validation->passes())
        // {
            $this->training->create(array('trainingname'=>Input::get('trainingname'),'email'=>Input::get('email'),'password'=>Hash::make(Input::get('password'))));

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
        return View::make('trainings.show');
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
