
    <nav class="navbar md:navbar-expand bg-1" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admission System</a>
    
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDarkDrawer" aria-controls="navbarDarkDrawer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarDarkDrawer" aria-labelledby="navbarDarkDrawerLabel">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarDarkDrawerLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body mb-2 md:mb-0">
        <ul class="nav navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
            <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
          </li>
        </ul>
      </div>


    </dialog>
  </div>
</nav>