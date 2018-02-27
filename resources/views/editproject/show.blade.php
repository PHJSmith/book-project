@extends('layouts.app')
@section('main')
<form action="{{route('editproject.update', $project)}}" method="POST" id="characterinformationformedit" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="group">
    Project Name: <br>
      <input type="text" name="projectname" id="projectname" maxlength="20" value= {{ $project->project_name }}>
      <br>
  </div>
  <div class="group">
    Genre: <br>
      <input type="text" name="projectgenre" id="projectgenre" maxlength="20" value= {{ $project->genre }}>
      <br>
  </div>
  <div class="group">
    Book Name: <br>
      <input type="text" name="bookname" id="bookname" maxlength="20" value= {{ $project->book_name }}>
      <br>
  </div>
  <div class="group">
    Number of Books: <br>
      <input type="text" name="numberofbooks" id=" numberofbooks" maxlength="20" value= {{ $project->number_of_books }}>
      <br>
  </div>
  <div>
    <div class="group">
        <input type="submit" class="submit" value="Submit and proceed" name="projectinformationsubmit" id="projectinformationsubmitid">
    </div>
  </div>
<a href="{{route('editcharacter.index')}}">Edit Characters Connected to this project</a>


@endsection
