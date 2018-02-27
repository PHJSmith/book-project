<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ Character, Project };

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('characterinformation.index', [
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
      $character = Character::create([
        'project_id' => $request->input('project_id'),
        'forename' => $request->input('forename'),
        'surname' => $request->input('surname'),
        'nickname' => $request->input('nickname'),
        'date_of_birth' => $request->input('date_of_birth'),
        'date_of_death' => $request->input('date_of_death'),
        'year_of_description' => $request->input('year_of_description'),
        'occupation' => $request->input('occupation'),
        'character_importance' => $request->input('character_importance'),
        'height' => $request->input('height'),
        'hair_colour' => $request->input('hair_colour'),
        'eye_colour' => $request->input('eye_colour'),
        'weight' => $request->input('weight'),
        'hair_style' => $request->input('hair_style'),
        'misc_features' => $request->input('misc_features'),
        'clothing' => $request->input('clothing'),
        'normal_clothing' => $request->input('normal_clothing'),
        'voice' => $request->input('voice'),
        'other_styles' => $request->input('other_styles'),
      ]);
      return redirect()->route('characterinformation.index');
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
    public function update(Character $character, $id)
    {
      Project::where('id', $id)->update($character->all());
      return redirect()->route('editproject.show.blade');
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
