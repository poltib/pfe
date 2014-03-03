<?php namespace SportFun\Controllers;

use SportFun\Repositories\Team\TeamInterface as TeamInterface;
use \View;
use \Input;
use \Redirect;

class TeamsController extends BaseController
{
	/**
    * TeamInterface Repository
    */
    protected $team;

    /**
    * Inject the TeamInterface Repository
    */
    public function __construct(TeamInterface $team)
    {
    	$this->team = $team;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams = $this->team->findAll();

        return View::make('teams.index', compact('teams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('teams.create');
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
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{

		$team = $slug;

        return View::make('teams.show', compact('team'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('teams.edit');
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
