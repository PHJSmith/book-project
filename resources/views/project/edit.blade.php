@extends('layouts.app')
@section('main')
  <form action="{{ route('project.update', $project) }}" method="POST" id="projectformedit" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      <div class="group">
          <input type="text" name="project_name" id="project_name" maxlength="20" required value="{{$project->project_name}}">
      </div>
      <div class="group">
          <input type="text" name="genre" id="genre" maxlength="20" required value="{{$project->genre}}">
      </div>
      <div class="group">
          <input type="text" name="book_name" id="book_name" maxlength="20" required value="{{$project->book_name}}">
      </div>
      <div class="group">
          <input type="text" name="number_of_books" id="number_of_books" maxlength="20" required value="{{$project->number_of_books}}">
      </div>

      <div>
        <div class="group">
            <input type="submit" class="submit" value="Submit and proceed" name="projectinformationsubmit" id="projectinformationsubmitid">
        </div>
      </div>
    </div>
  </form>
@endsection
