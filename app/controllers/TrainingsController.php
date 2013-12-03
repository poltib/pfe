<?php
use TrainingInterface; 

class TrainingsController extends BaseController {
	/**
    * TrainingInterface Repository
    */
    protected $training;

    /**
    * Inject the TrainingInterface Repository
    */
    public function __construct(TrainingInterface $training)
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
        $trainings = $this->training->findAll();

        return View::make('trainings.index', compact('trainings'))->with('title', 'Liste des entrainements');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('trainings.create')->with('title', 'Créer un entrainement');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//        
        $training = $this->training->store( Input::all() );
        if ($training['validation'])
        {
            return Redirect::route('trainings.index')
            ->with('flash_notice', 'The new training has been created');
        }
        return Redirect::route('trainings.create')
              ->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $trainingAndPoints = $this->training->findById($id);
        $training = $trainingAndPoints['training'];
        $trainingPoints = $trainingAndPoints['trainingPoints'];
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
        $this->training->destroy($id);
        return Redirect::route('trainings.index')
            ->with('flash_notice', 'The training has been deleted');
	}

}
