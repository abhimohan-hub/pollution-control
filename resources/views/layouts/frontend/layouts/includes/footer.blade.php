<div class="container text-center text-md-start">
    <div class="footer-wrap">
      <div class="about">
        <img src="img/icon/company-logo-black.svg" alt="">
        <p class="text-muted py-4">
          Start working with Firmbee which can provide you with all the tools needed to run an effcieint business remotely.
        </p>
        <div class="social-media">
          <a href="" class="me-2 text-reset"><img src="img/icon/instagram-icon.svg" alt=""></a>
          <a href="" class="me-2 text-reset"><img src="img/icon/facebook-icon.svg" alt=""></a>
          <a href="" class="me-2 text-reset"><img src="img/icon/twitter-icon.svg" alt=""></a>
          <a href="" class="me-2 text-reset"><img src="img/icon/linkedin-icon.svg" alt=""></a>
        </div>
      </div>
      <div class="company">
        <p class="fw-bold">Company</p>
        <p><a href="">About us</a></p>
        <p><a href="">Services</a></p>
        <p><a href="">Team</a></p>
        <p><a href="">Pricing</a></p>
        <p><a href="">Project</a></p>
        <p><a href="">Careers</a></p>
        <p><a href="">Blog</a></p>
        <p>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                @else
                        <a href="">
                            {{ Auth::user()->name }}</span>
                        </a>
                @endguest
            </ul>
        </p>
      </div>
      <div class="useful-links">
        <p class="fw-bold">Useful links</p>
        <p><a href="">Terms of </a></p>
        <p><a href="">Services</a></p>
        <p><a href="">Privacy Policy</a></p>
        <p><a href="">Documentation</a></p>
        <p><a href="">Changelog</a></p>
        <p><a href="">Components</a></p>
      </div>
      <div class="newsletter">
        <p class="fw-bold">Newsletter</p>
        <p class="text-muted">Sign up and receive the latest tips
          via email.</p>
          <form id="subscribe" action="{{ route('send.mail') }}" method="POST">
              @csrf
            <label for="email">Your E-mail:</label>
            <input type="email" placeholder="E-mail:" name="email" required>
            <button type="submit" class="main-btn">Subscribe</button>
          </form>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2022 Pollution Control System | Created by PCS Group</p>
  </div>
  </div>
