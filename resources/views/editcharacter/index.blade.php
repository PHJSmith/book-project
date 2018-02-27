@extends('layouts.app')
@section('main')
  <form action="{{ route('editproject.update', $project) }}" method="POST" id="characterinformationformedit" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      Characters:
      <br>
      @foreach ($project->character as $character)
        <br>
        {{$character->forename}}
        <div class="group">
            <input type="text" name="project_id" id="project_id" maxlength="20" required value={{$character->project_id}}>
        </div>
        <div class="group">
            <input type="text" name="forename" id="forename" maxlength="20" required value={{$character->forename}}>
        </div>
        <div class="group">
            <input type="text" name="surname" id="surname" maxlength="20" required value={{$character->surname}}>
        </div>
        <div class="group">
            <input type="text" name="nickname" id="nickname" maxlength="20" value={{$character->nickname}}>
        </div>
        <div class="group">
            <input type="text" name="date_of_birth" id="date_of_birth" maxlength="20" value={{$character->date_of_birth}}>
        </div>
        <div class="group">
            <input type="text" name="date_of_death" id="date_of_death" maxlength="20" value={{$character->date_of_death}}>
        </div>
        <div class="group">
            <input type="text" name="year_of_description" id="year_of_description" maxlength="20" value={{$character->year_of_description}}>
        </div>
        <div class="group">
            <input type="text" name="occupation" id="occupation" maxlength="30" value={{$character->occupation}}>
        </div>
        <div class="group">
            <input type="text" name="character_importance" id="character_importance" maxlength="20" value={{$character->character_importance}}>
        </div>
        <div class="group">
            <input type="text" name="height" id="height" value={{$character->height}}>
        </div>
        <div class="group">
            <input type="text" name="hair_colour" id="hair_colour" maxlength="60" value={{$character->hair_colour}}>
        </div>
        <div class="group">
            <input type="text" name="eye_colour" id="eye_colour" maxlength="20" value={{$character->eye_colour}}>
        </div>
        <div class="group">
            <input type="text" name="weight" id="weight" value={{$character->weight}}>
        </div>
        <div class="group">
            <input type="text" name="hair_style" id="hair_style" maxlength="20" value={{$character->hair_style}}>
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
            <input name="voice" id="voice" maxlength="600" value={{$character->voice}}>
        </div>
        <div class="group">
            <textarea name="other_styles" id="other_styles">{{$character->other_styles}}</textarea>
        </div>
        <div>
          <div class="group">
              <input type="submit" class="submit" value="Submit and proceed" name="characterinformationsubmit" id="characterinformationsubmitid">
          </div>
        </div>


      @endforeach
    </div>
  </form>

@endsection
