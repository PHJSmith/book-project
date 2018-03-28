<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ Character, Project };

class CharacterController extends Controller
{
    public function index()
    {
        // List all characters
        return view('character.index', [
          'projects' => Project::all(),
          'character' => Character::all(),
        ]);
    }

     // Redirect to the create form for a single character
    public function create()
    {
      return view('character.create', [
        'character' => Character::all(),
        'characters' => Character::all(),
        'projects' => Project::all(),
      ]);
    }

     // Add database entry for character
    public function store(Request $request)
    {
      $character = Character::create([
        'project_id' => $request->input('projectname'),
        'forename' => $request->input('forename'),
        'surname' => $request->input('surname'),
        'nickname' => $request->input('nickname'),
        'date_of_birth' => $request->input('date_of_birth'),
        'date_of_death' => $request->input('date_of_death'),
        'year_of_description' => $request->input('year_of_description'),
        'occupation' => $request->input('occupation'),
        'place_of_birth' => $request->input('place_of_birth'),
        'race' => $request->input('race'),
        'national_loyalty' => $request->input('national_loyalty'),
        'organisation' => $request->input('organisation'),
        'agenda' => $request->input('agenda'),
        'weaponry' => $request->input('weaponry'),
        'skills' => $request->input('skills'),
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
      return redirect()->route('character.index');
    }

     // View a single character
    public function show(Character $character)
    {
        return view('character.show', [
          'character' => $character,
        ]);
    }

     // Redirect to the update form for an EXISTING Character
    public function edit(Character $character)
    {
        return view('character.edit', [
          'character' => $character,
        ]);
    }

     // Update database entry for an EXISTING Character
    public function update(Character $character, Request $request)
    {
      $character->forename = $request->input('forename');
      $character->surname = $request->input('surname');
      $character->nickname = $request->input('nickname');
      $character->date_of_birth = $request->input('date_of_birth');
      $character->date_of_death = $request->input('date_of_death');
      $character->year_of_description = $request->input('year_of_description');
      $character->occupation = $request->input('occupation');
      $character->character_importance = $request->input('character_importance');
      $character->height = $request->input('height');
      $character->hair_colour = $request->input('hair_colour');
      $character->eye_colour = $request->input('eye_colour');
      $character->weight = $request->input('weight');
      $character->hair_style = $request->input('hair_style');
      $character->misc_features = $request->input('misc_features');
      $character->clothing = $request->input('clothing');
      $character->normal_clothing = $request->input('normal_clothing');
      $character->voice = $request->input('voice');
      $character->other_styles = $request->input('other_styles');


      $character->save();

      return redirect()->route('project.show', $character->project_id);
    }

    public function destroy($id)
    {
        //
    }
}
