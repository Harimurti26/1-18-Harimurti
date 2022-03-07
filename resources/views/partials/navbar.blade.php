<nav class="navbar navbar-expand-lg navbar-dark bg-danger"> <!-- modul 2 C-5 -->
  <div class="container">
    <a class="navbar-brand" href="/">Harimurti</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a> <!-- page 17/17 mod 2 dari 10 ke 16 -->
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item"> <!-- modul 3 -->
          <a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href="/contacts">Contacts Us</a>
        </li>

      </ul>
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('register')}}">Register</a>
          </li>
      </ul>
    </div>
  </div>
</nav>