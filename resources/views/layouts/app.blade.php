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
              <a href="{{ route('project.create') }}">New Project</a>
              <a href="{{ route('character.create') }}">New Character</a>
              <a href="{{ route('relationshipmanagement.index') }}">New Relationship</a>
              <a href="{{ route('plotnote.index') }}">Plot notes</a>
              <a href="{{ route('project.index') }}">Edit Project</a>
              <a href="{{ route('deleteproject.index') }}">Delete Project</a>
              <a href="{{ route('accountmanagement.index') }}">Account</a>
              <a href="{{ route('logout') }}">Logout</a>
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
