@extends('layouts.app')
  @section('main')
    <h2>Project Details</h2>
    <table>
      <a href="{{route('project.edit', $project)}}"> Edit This Project</a>
      <tr><td>Project Name: </td><td>{{$project->project_name}}</td></tr>
      <tr><td>Project Genre: </td><td>{{$project->genre}}</td></tr>
      <tr><td>Book name: </td><td>{{$project->book_name}}</td></tr>
      <tr><td>Number of books: </td><td>{{$project->number_of_books}}</td></tr>
    </table>
    <h3>Plot notes pinned to this project:</h3>
      @foreach ($project->plotnote as $plotnote)
        <br>
        <a href="{{route('plotnote.edit', $plotnote)}}"> &nbsp&nbsp&nbsp Edit this plot note</a>
        <table>
          <tr><td>Note Title: </td><td>{{$plotnote->note_title}}</td></tr>
          <tr><td>Type: </td><td>{{$plotnote->note_type}}</td></tr>
          <tr><td>Content: </td><td>{{$plotnote->content}}</td></tr>
        </table>
      @endforeach

    <h3>Characters within this project:</h3>
      @foreach ($project->characters as $character)
        <br>
        <table>
          {{$character->forename, $character->surname}}
          <a href="{{route('character.show', $character)}}"> &nbsp&nbsp&nbsp Examine or edit this character</a>
          <tr><td>Forename: </td><td>{{$character->forename}}</td></tr>
          <tr><td>Surname: </td><td>{{$character->surname}}</td></tr>
          <tr><td>Nickname: </td><td>{{$character->nickname}}</td></tr>
          <tr><td>Character importance: </td><td>{{$character->character_importance}}</td></tr>
        </table>
      @endforeach

  @endsection
