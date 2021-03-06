<?php namespace SportFun\Controllers;

use SportFun\Repositories\CategoryInterface;
use SportFun\Repositories\ForumInterface as ForumInterface;
use SportFun\Repositories\Category as Category;
use \View;
use \Input;
use \Redirect;

class ForumsController extends BaseController
{
    /**
    * ForumInterface Repository
    */
    protected $forum;

    /**
     * ForumInterface Repository
     */
    protected $category;

    /**
    * Inject the ForumInterface Repository
    */
    public function __construct(ForumInterface $forum, CategoryInterface $category)
    {
        $this->forum = $forum;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $forums = $this->forum->findAll();

        return View::make('forums.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->category->findAll();

        return View::make('forums.create', compact('categories'));
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
        return View::make('forums.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('forums.edit');
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
