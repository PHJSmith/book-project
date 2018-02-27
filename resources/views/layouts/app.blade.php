<html>
  <head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="navigationtop">
        <div class="wrap">
            <div class="homepage">
                Writer's Vault
            </div>
        </div>
    </div>
      <div class="navigation2top">
          <div class="wrap">
              <a href="{{ route('newproject.index') }}">New Project</a>
              <a href="{{ route('characterinformation.index') }}">New Character</a>
              <a href="{{ route('relationshipmanagement.index') }}">New Relationship</a>
              <a href="{{ route('plotinfo.index') }}">Plot Information</a>
              <a href="{{ route('editproject.index') }}">Edit Project</a>
              <a href="{{ route('deleteproject.index') }}">Delete Project</a>
              <a href="{{ route('accountmanagement.index') }}">Account</a>
              <a href="{{ route('logout.index') }}">Logout</a>
          </div>
      </div>
      <div class="universalbody">
        <div class="homepagemaindivider">
            @yield('main')
            @yield('create')
      </div>
    </div>
  </body>
</html>
