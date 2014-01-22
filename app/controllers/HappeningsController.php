<?php
use HappeningInterface;

class HappeningsController extends BaseController {

	/**
    * HappeningInterface Repository
    */
    protected $happening;

    /**
    * Inject the HappeningInterface Repository
    */
    public function __construct(HappeningInterface $happening)
    {
    $this->happening = $happening;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$happenings = $this->happening->findAll();

        return View::make('happenings.index', compact('happenings'))->with('title', 'Liste des courses');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $eventTypes = EventType::all();

        return View::make('happenings.create', compact('eventTypes'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$happening = $this->happening->store( Input::all() );

        if($happening['validation']){

            return Redirect::route('happenings.show', $happening['slug'])
            ->with('flash_notice', 'The new happening has been created');
        }

        return Redirect::route('happenings.create')
              ->withInput()
              ->withErrors($happening['error']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
        $happeningAndPoints = $this->happening->findById($slug->id);
        $happening = $happeningAndPoints['happening'];
        $happeningPoints = $happeningAndPoints['happeningPoints'];
        return View::make('happenings.show', compact('happening','happeningPoints'))->with('title', $happening->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
        $happening = $slug;

        $eventTypes = EventType::all();

        return View::make('happenings.edit', compact('happening', 'eventTypes'));
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
        $this->happening->destroy($id);
        return Redirect::route('happenings.index')
            ->with('flash_notice', 'The happening has been deleted');
	}


    public function home()
    {
        $happenings = $this->happening->findAll();

        $posts = Post::all();

        return View::make('home.index', compact('happenings', 'posts'));
    }

    public function getDownload($file){
        $file = public_path().$file;
        $headers = array(
              'Content-Type: application/tcx',
            );
        return Response::download($file, '.tcx', $headers);
    }


}
