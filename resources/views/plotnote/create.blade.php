@extends('layouts.app')

@section('main')
<html>
    <h1>Create a new Plotnote:</h1>
    <div class="align">
        <!--VALIDATE THIS FORM-->
        <form action="{{ route('plotnote.store') }}" method="POST" id="plotnoteform" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="testdiv" style="text-align: left;">
                <label for="projectname">Project name:</label>
                <div class="group">
                    <select name="projectname" id="dropdown">
                      <option>Select a project:</option>
                      @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                        {{$project_id = $project->id}}
                      @endforeach
                    </select>
                </div>
                <div class="group">
                    <input type="text" name="note_title" id="note_title" maxlength="40" required placeholder="Note Title">
                </div>
                <div class="group">
                    <input type="text" name="note_type" id="note_type" maxlength="40" required placeholder="Note Type">
                </div>
                <div class="group">
                    <textarea name="content" id="content" placeholder="Content"></textarea>
                </div>
            </div>
            <div class="testdiv" style="text-align: left;">
                <div class="group">
                    <input type="submit" class="submit" value="Submit and proceed" name="plotnotesubmit" id="plotnotesubmitid">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection
