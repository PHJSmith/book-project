@extends('layouts.app')
@section('main')
  <form action="{{ route('character.update', $character) }}" method="POST" id="characterformedit" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      {{$character->forename}}&nbsp{{$character->surname}}{{  $character->nickname ==! "" ? ", $character->nickname" : ($character->forename ==="" ? "" : " ") }}

      <div class="group">
          <input type="text" name="forename" id="forename" maxlength="20" required value="{{$character->forename}}">
      </div>
      <div class="group">
          <input type="text" name="surname" id="surname" maxlength="20" required value="{{$character->surname}}">
      </div>
      <div class="group">
          <input type="text" name="nickname" id="nickname" maxlength="40" value="{{$character->nickname}}">
      </div>
      <div class="group">
          <input type="text" name="date_of_birth" id="date_of_birth" maxlength="20" value="{{$character->date_of_birth}}">
      </div>
      <div class="group">
          <input type="text" name="date_of_death" id="date_of_death" maxlength="20" value="{{$character->date_of_death}}">
      </div>
      <div class="group">
          <input type="text" name="year_of_description" id="year_of_description" maxlength="20" value="{{$character->year_of_description}}">
      </div>
      <div class="group">
          <input type="text" name="occupation" id="occupation" maxlength="40" value="{{$character->occupation}}">
      </div>
      <div class="group">
          <input type="text" name="place_of_birth" id="place_of_birth" maxlength="20" value={{$character->place_of_birth}}>
      </div>
      <div class="group">
          <input type="text" name="race" id="race" maxlength="20" value={{$character->race}}>
      </div>
      <div class="group">
          <input type="text" name="national_loyalty" id="national_loyalty" maxlength="20" value={{$character->national_loyalty}}>
      </div>
      <div class="group">
          <input type="text" name="organisation" id="organisation" maxlength="20" value={{$character->organisation}}>
      </div>
      <div class="group">
          <input type="text" name="agenda" id="agenda" maxlength="20" value={{$character->agenda}}>
      </div>
      <div class="group">
          <input type="text" name="weaponry" id="weaponry" maxlength="20" value={{$character->weaponry}}>
      </div>
      <div class="group">
          <input type="text" name="skills" id="skills" maxlength="20" value={{$character->skills}}>
      </div>
      <div class="group">
          <input type="text" name="character_importance" id="character_importance" maxlength="20" value="{{$character->character_importance}}">
      </div>
      <div class="group">
          <input type="text" name="height" id="height" value="{{$character->height}}">
      </div>
      <div class="group">
          <input type="text" name="hair_colour" id="hair_colour" maxlength="60" value="{{$character->hair_colour}}">
      </div>
      <div class="group">
          <input type="text" name="eye_colour" id="eye_colour" maxlength="20" value="{{$character->eye_colour}}">
      </div>
      <div class="group">
          <input type="text" name="weight" id="weight" value="{{$character->weight}}">
      </div>
      <div class="group">
          <input type="text" name="hair_style" id="hair_style" maxlength="20" value="{{$character->hair_style}}">
      </div>
      <div class="group">
          <input type="text" name="misc_features" id="misc_features" value="{{$character->misc_features}}">
      </div>
      <div class="group">
          <textarea name="clothing" id="clothing" maxlength="600">{{$character->clothing}}</textarea>
      </div>
      <div class="group">
          <textarea type="text" name="normal_clothing" id="normal_clothing">{{$character->normal_clothing}}</textarea>
      </div>
      <div class="group">
          <input name="voice" id="voice" maxlength="600" value="{{$character->voice}}">
      </div>
      <div class="group">
          <textarea name="other_styles" id="other_styles">{{$character->other_styles}}</textarea>
      </div>
      <div>
        <div class="group">
            <input type="submit" class="submit" value="Submit and proceed" name="charactersubmit" id="charactersubmitid">
        </div>
      </div>
    </div>
  </form>
@endsection
