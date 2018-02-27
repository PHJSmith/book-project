@extends('layouts.app')

@section('main')
<html>
    <h1>Create a new Character:</h1>
    <!--Creating a dropdown box for project_name values-->
    <div class="align">
        <!--VALIDATE THIS FORM-->
        <form action="{{ route('characterinformation.store') }}" method="POST" id="characterinformationformtest" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="testdiv" style="text-align: left;">
                <label for="projectname">Project name:</label>
                <div class="group">
                    <select name="projectname" id="dropdown">
                      <option>Select a project:</option>
                      @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                      @endforeach
                    </select>
                </div>
            <div class="group">
                <input type="text" name="forename" id="forename" maxlength="20" required placeholder="Forename">
            </div>
            <div class="group">
                <input type="text" name="surname" id="surname" maxlength="20" required placeholder="Surname">
            </div>
            <div class="group">
                <input type="text" name="nickname" id="nickname" maxlength="20" placeholder="Nickname">
            </div>
            <div class="group">
                <input type="text" name="date_of_birth" id="date_of_birth" maxlength="20" placeholder="Date of birth">
            </div>
            <div class="group">
                <input type="text" name="date_of_death" id="date_of_death" maxlength="20" placeholder="Date of death">
            </div>
            <div class="group">
                <input type="text" name="year_of_description" id="year_of_description" maxlength="20" placeholder="Year of description">
            </div>
            <div class="group">
                <input type="text" name="occupation" id="occupation" maxlength="30" placeholder="Occupation">
            </div>
            <div class="group">
                <input type="text" name="character_importance" id="character_importance" maxlength="20" placeholder="Character importance">
            </div>
        </div>
            <div class="testdiv">
                <div class="group">
                    <input type="text" name="height" id="height" placeholder="Height (cm)">
                </div>
                <div class="group">
                    <input type="text" name="hair_colour" id="hair_colour" maxlength="60" placeholder="Hair colour">
                </div>
                <div class="group">
                    <input type="text" name="eye_colour" id="eye_colour" maxlength="20" placeholder="Eye colour">
                </div>
                <div class="group">
                    <input type="text" name="weight" id="weight" placeholder="Weight (lb)">
                </div>
                <div class="group">
                    <input type="text" name="hair_style" id="hair_style" maxlength="20" placeholder="Hair style">
                </div>
                <div class="group">
                    <input type="text" name="misc_features" id="misc_features" placeholder="Other features">
                </div>
                <div class="group">
                    <textarea name="clothing" id="clothing" maxlength="600" placeholder="Clothing when encountered"></textarea>
                </div>
                <div class="group">
                    <textarea type="text" name="normal_clothing" id="normal_clothing" placeholder="Normal Clothing"></textarea>
                </div>
                <div class="group">
                    <input name="voice" id="voice" maxlength="600" placeholder="Voice style">
                </div>
                <div class="group">
                    <textarea name="other_styles" id="other_styles" placeholder="Other styles"></textarea>
                </div>
            </div>
            <div class="testdiv" style="text-align: left;">
                <label for="fileToUpload">Image of Character:</label>
                <div class="group">
                    <input type="file" class="submit" name="fileToUpload" id="fileToUpload" onchange="readURL(this);"><br>
                    <img id="image" src="#" alt="" />
                </div>
                <div class="group">
                    <input type="submit" class="submit" value="Submit and proceed" name="characterinformationsubmit" id="characterinformationsubmitid">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection
