@extends('layouts.app')

@section('main')
<html>
<body>
    <h1>Reset Password</h1>
    <h4>Please fill this form in to reset your password.</h4><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        New Password:<br>
        <input type="password" name="password_update" required><br>
        Confirm New Password:<br>
        <input type="password" name="confirm_password_update" required><br><br>
        <input type="submit" name="Submit" value="Submit"><br><br>
    </form>
</body>
</html>
@endsection
