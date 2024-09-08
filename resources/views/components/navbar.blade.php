<div>

  <!-- CON IL GUEST VISUALIZZO LA NAVBAR SENZA I PROVILEGI DI UTENTE REGISTRATI -->
  @guest
  <header data-bs-theme="dark">
    <div class="collapse text-bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <p class="text-body-secondary">Questo lavoro è stato svolto al termine del percorso di formazione.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4>
              <ul class="list-unstyled">
                <li><a class="nav-link active" aria-current="page" href="/">Home</a>
                  <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                  <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
              </ul>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>SelfWorkFinale</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    @endguest
    <!-- CON AUTH VISUALIZZO I CONTENUTI DELLA MIO SITO WEB -->
    @auth
    <header data-bs-theme="dark">
      <div class="collapse text-bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <p class="text-body-secondary">Questo lavoro è stato svolto al termine del percorso di formazione.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4>
                <ul class="list-unstyled">
                  <li>
                    <a class="nav-link active" aria-current="page" href="{{ route('articles.create') }}">Inserisci un articolo</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Guarda gli articoli</a>
                    <form method="POST" action="{{route('logout')}}" class="form ">
                  </li>
                </ul>
                @csrf
                <div class="mx-2">
                  <button class=" rounded-pill " type="submit">Logout </button>
                </div>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
              <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
              <circle cx="12" cy="13" r="4" />
            </svg>
            <strong>SelfWorkFinale</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      </form>
      @endauth
</div>
</div>
</div>

</header>
</div>