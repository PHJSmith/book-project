@extends('layouts.app')

@section('main')
  <h1>Plot notes</h1>
  <br>
  <p>Plot notes can be anything from a structured plot arc to 'remember to kill off dave'. Just add the content you want and select a project to attach the plot note to the project. It can be edited or deleted later.
  <br>
  <br>
  <div class="indexcolumn">
      <h3>
      <a href="{{ route('plotnote.create') }}" class="button">Create a new plot note</a>
      </h3>
  </div>
@endsection
