@extends('layouts.app')

@section('main')
<html>
<body>
    <h1>Plot Information:</h1>
    <div class="align">
      <form action="{{ route('plotinfo.store') }}" method="POST">
        {{ csrf_field() }}
            <div class="testdiv">
              <label for="projectname">Project name:</label>
              <div class="group">
                  <select name="projectname" id="dropdown">
                    <option>Select a project:</option>
                    @foreach ($projects as $project)
                      <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                    @endforeach
                  </select>
              </div>
                <br>
                Main plot:<br>
                <textarea type="text" name="main_plot"></textarea>
            </div>
            <div class="testdiv">
                <br><br>Sub plot:<br>
                <textarea type="text" name="sub_plot"></textarea>
                <br>Main characters:<br>
                <textarea type="text" name="main_characters"></textarea>
            </div>
            <div class="testdiv">
                <br><br>Endings:<br>
                <textarea type="text" name="ending"></textarea>
                <br><br><input type="submit" class="submit" value="Submit and proceed" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
@endsection
