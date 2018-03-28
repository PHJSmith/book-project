@extends('layouts.app')

@section('main')
  <html>
  <body>
    <h1>Projects Home</h1>
    <div style="padding-left: 14px; padding-bottom: 1px; font-size: 25px; text-decoration: underline;">
      List of Projects:
      <br>
    </div>
    <div class="testdiv">
      <br>
      Choose a project to view and edit.
      <br>
      @foreach ($projects as $project)
        <br>
        <a class="hyperlink" href="{{ route('project.show', $project) }}">
            {{ $project->project_name }}
        </a>
        <br>
      @endforeach

    </div>
    <div style="padding-left: 14px; font-size: 16px; ">
    </div>
  </body>
  </html>

@endsection
