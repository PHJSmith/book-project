@extends('layouts.app')

@section('main')
  <h1>Dashboard</h1>
  <h2>Writer's Vault</h2>
  <p>This software is designed to enable authors to keep track of their projects, plots and characters.</p>
  <h2>Please click below to start a new project or edit an existing one.</h2>
  <br>
  <br>
  <br>
  <div class="indexcolumn">
      <h3>
      <a href="{{ route('newproject.index') }}" class="button">Create a new project</a>
      </h3>
  </div>
  <div class="indexcolumn2">
      <h3>
      <a href="{{ route('editproject.index') }}" class="button">Edit an existing project</a>
      </h3>
  </div>
@endsection
