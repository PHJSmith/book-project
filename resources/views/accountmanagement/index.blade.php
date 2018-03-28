@extends('layouts.app')

@section('main')
<html>
<body>
  <h1>Account Management</h1>
  <!--Echos the user's nickname-->
  <div class="align-left">
    Name: {{$user->name}}<br>
    Email Address: {{$user->email}} <br>
  </div>
</body>
</html>
@endsection
