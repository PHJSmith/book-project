@extends('layouts.app')

@section('main')
<html>
<body>
  <h1>Account Management</h1>
  <!--Echos the user's nickname-->
  <div class="align-left">
    Nickname: <br><br>
    Email Address: <br><br>
    Password: <br><br>
    <a style="text-decoration: underline; color: blue;" href="{{ route('resetpassword.index') }}">Reset Password</a>
  </div>
</body>
</html>
@endsection
