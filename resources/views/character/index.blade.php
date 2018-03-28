@extends('layouts.app')
@section('main')
  @foreach ($projects as $project)
    @foreach ($project->characters as $character)
      <br>
      {{$character->forename}}
      <table>
        <a href="{{route('character.show', $character)}}"> &nbsp&nbsp&nbsp Examine or edit this character</a>
        <tr><td>Project ID: </td><td>{{$character->project_id}}</td></tr>
        <tr><td>Forename: </td><td>{{$character->forename}}</td></tr>
        <tr><td>Surname: </td><td>{{$character->surname}}</td></tr>
        <tr><td>Nickname: </td><td>{{$character->nickname}}</td></tr>
        <tr><td>Date of birth: </td><td>{{$character->date_of_birth}}</td></tr>
        <tr><td>Date of death: </td><td>{{$character->date_of_death}}</td></tr>
        <tr><td>Year of description: </td><td>{{$character->year_of_description}}</td></tr>
        <tr><td>Occupation: </td><td>{{$character->occupation}}</td></tr>
        <tr><td>Character importance: </td><td>{{$character->character_importance}}</td></tr>
        <tr><td>Height: </td><td>{{$character->height}}</td></tr>
        <tr><td>Hair Colour: </td><td>{{$character->hair_colour}}</td></tr>
        <tr><td>Eye colour: </td><td>{{$character->eye_colour}}</td></tr>
        <tr><td>Weight: </td><td>{{$character->weight}}</td></tr>
        <tr><td>Hair Style: </td><td>{{$character->hair_style}}</td></tr>
        <tr><td>Misc Features: </td><td>{{$character->misc_features}}</td></tr>
        <tr><td>Clothing: </td><td>{{$character->clothing}}</td></tr>
        <tr><td>Normal clothing: </td><td>{{$character->normal_clothing}}</td></tr>
        <tr><td>Voice: </td><td>{{$character->voice}}</td></tr>
        <tr><td>Other styles: </td><td>{{$character->other_styles}}</td></tr>
      </table>

    @endforeach
  @endforeach
@endsection
