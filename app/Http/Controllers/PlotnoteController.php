<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ { Plotnote, Project };

class PlotnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('plotnote.index', [
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
      return view('plotnote.create', [
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
        $plotnote = Plotnote::create([
          'project_id' => $request->input('projectname'),
          'note_title' => $request->input('note_title'),
          'note_type' => $request->input('note_type'),
          'content' => $request->input('content'),
        ]);
      return redirect()->route('plotnote.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plotnote $plotnote)
    {
      return view('plotnote.edit', [
        'plotnote' => $plotnote,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Plotnote $plotnote, Request $request)
    {
      $plotnote->note_title = $request->input('note_title');
      $plotnote->note_type = $request->input('note_type');
      $plotnote->content = $request->input('content');


      $plotnote->save();

      return redirect()->route('project.show', $plotnote->project_id);
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
