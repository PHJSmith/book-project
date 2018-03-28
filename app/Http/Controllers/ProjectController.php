<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('project.index', [
        'project' => Project::all(),
        'projects' => Project::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create', [
          'project' => Project::all(),
          'projects' => Project::all(),
        ]);
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
        'project_name' => $request->input('project_name'),
        'book_name' => $request->input('book_name'),
        'genre' => $request->input('genre'),
        'number_of_books' => $request->input('number_of_books'),
      ]);

      return redirect()->route('project.index');
    }

    public function show(Project $project)
    {
      return view('project.show', [
        'project' => $project,
      ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      return view('project.edit', [
        'project' => $project,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
      $project->project_name = $request->input('project_name');
      $project->genre = $request->input('genre');
      $project->book_name = $request->input('book_name');
      $project->number_of_books = $request->input('number_of_books');

      $project->save();
      return redirect()->route('project.index');
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
