@extends('layouts.app')

@section('main')
  <html>
  <body>
      <h1>Create Plot Information for :</h1>
      <form action="{{ route('plotinfo.store') }}" method="POST">
        {{ csrf_field() }}
  <!-- Taking project_name over from editprojectvariable and hiding the value -->
          <input type="hidden" name="project_name" maxlength="20" value="">
          Main plot:<br>
          <text type="text" name="main_plot" >
          <br>
          Sub plot:<br>
          <input type="text" name="sub_plot" >
          <br>
          Main characters:<br>
          <input type="text" name="main_characters" >
          <br>
          Endings:<br>
          <input type="text" name="ending" >
          <br>
          <br>
          <input type="submit" value="Submit and proceed" name="submit">
          <!--Remove all these once found out how to dynamically adjust the div-->
          <br>
          <br>
          <br>
          <br>
      </form>
  </body>
  </html>
@endsection
