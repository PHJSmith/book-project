@extends('layouts.app')

@section('main')
<html>
<body>
   <h1>Create a Project:</h1>
   <div class="pclass2">
       What is a project?
   </div>
   <div class="pclass3">
   Here you can make a project which could be a standalone book or a set of books.<br>
   It is here where you put some basic information about your first ‘project’.<br>
   The Project Name could be “The Suffolk Sentinel Series.” But the first book could be called “Firestorm”.
   </div>

   <div class="align">
        <form action="{{ route('project.store') }}" method="POST">
          {{ csrf_field() }}
            <div class="testdiv">
                Project name:<br>
                <input type="text" name="project_name" maxlength="40" >
                <br><br>Genre:<br>
                <input type="text" name="genre" maxlength="40" >
            </div>
            <div class="testdiv">
                <br><br>Book name:<br>
                <input type="text" name="book_name" >
                <br><br>Number of books:<br>
                <input type="text" name="number_of_books" id="number_of_books" >
                <p id="validation"></p>
            </div>
            <div class="testdiv">
                <input type="submit" class="submit" value="Submit and proceed" name="submit">
            </div>
        </form>
    </div>
<script>
function validateForm () {
    var isValid = !isNaN(document.getElementById('number_of_books').value);
    if (!isValid) alert('Please enter a valid number for \'Number of Books\'');
    return isValid;
}
</script>
</body>
</html>
@endsection
