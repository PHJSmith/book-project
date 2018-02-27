<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editproject.index');
    }

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
        //
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
    public function update(Request $request, Character $editcharacter)
    {
      $editcharacter->project_id = $request->input('project_id');
      $editcharacter->forename = $request->input('forename');
      $editcharacter->surname = $request->input('surname');
      $editcharacter->nickname = $request->input('nickname');
      $editcharacter->date_of_birth = $request->input('date_of_birth');
      $editcharacter->date_of_death = $request->input('date_of_death');
      $editcharacter->year_of_description = $request->input('year_of_description');
      $editcharacter->occupation = $request->input('occupation');
      $editcharacter->character_importance = $request->input('character_importance');
      $editcharacter->height = $request->input('height');
      $editcharacter->hair_colour = $request->input('hair_colour');
      $editcharacter->eye_colour = $request->input('eye_colour');
      $editcharacter->weight = $request->input('weight');
      $editcharacter->hair_style = $request->input('hair_style');
      $editcharacter->misc_features = $request->input('misc_features');
      $editcharacter->clothing = $request->input('clothing');
      $editcharacter->normal_clothing = $request->input('normal_clothing');
      $editcharacter->voice = $request->input('voice');
      $editcharacter->other_styles = $request->input('other_styles');

    $editcharacter->save();
    return redirect()->route('editcharacter.index');
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
