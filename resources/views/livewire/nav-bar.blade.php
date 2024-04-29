<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          @guest
          <li class="nav-item">
            <a class="nav-link" wire:navigate href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" wire:navigate href="/register">Register</a>
          </li>
          @endguest
          
          @auth
          <li class="nav-item">
            <a wire:navigate class="nav-link active" aria-current="page" href="/posts">Posts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/user">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" wire:click="logout">Logout</a>
            </div>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>