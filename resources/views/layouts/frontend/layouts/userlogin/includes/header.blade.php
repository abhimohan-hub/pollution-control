<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#homepage"><img class="w-100" src="img/icon/company-logo.svg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

          <li class="nav-card-item">
            <a class="nav-link  active" href="index.html">Home</a>
          </li>

          <li class="nav-card-item">
            <a class="nav-link" href="aboutus.html">About</a>
          </li>

          <li class="nav-card-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>

          <li class="nav-card-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>

          <li class="nav-card-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>

          <li class="nav-card-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
