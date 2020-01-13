<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item header-title" href="/">
        fnista
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">  
      <div class="navbar-end">
        <a href="/subscribe" class="navbar-item">
          Subscribe
        </a>
        <div class="navbar-item">
          <div class="buttons">
            @if (Auth::user())
              <a href="/logout" class="button is-black">
                <strong>Logout</strong>
              </a>
            @else
              <a href="/register" class="button is-black">
                <strong>Sign up</strong>
              </a>
              <a href="/login" class="button is-light">
                Log in
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </nav>
