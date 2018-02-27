<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class NewProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newproject.index', [
          'projects' => Project::all(),
        ]);
    }  //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::create([
          'user_name' => 'yo_homie',
          'project_name' => $request->input('projectname'),
          'book_name' => $request->input('bookname'),
          'genre' => $request->input('genre'),
          'number_of_books' => $request->input('numberofbooks'),
        ]);

        return redirect()->route('editproject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
          $projects = Project::find($project);
          return view('editproject.show', compact('projects'));
          return view('editproject.show', [
            'projects' => Project::all(),
          ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
