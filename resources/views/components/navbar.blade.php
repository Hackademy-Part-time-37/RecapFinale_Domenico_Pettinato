<div>
  <!-- CON IL GUEST VISUALIZZO LA NAVBAR SENZA I PROVILEGI DI UTENTE REGISTRATI -->
  @guest
  <header data-bs-theme="dark">
    <div class="collapse text-bg-dark " id="navbarHeader">
      <div class="container">
        <div class="row">
          <!-- <div class="col-sm-8 col-md-7 py-5">
            <h2 class="text-body-secondary">QUESTA CONTENUTO NON LO VEDI PERCHE' NON SEI LOGGATO </h2>
          </div> -->
          <div class="col-sm-4 offset-md-1 py-3">
            <h4>
              <ul class="list-unstyled">
                <li>
                  <!-- <a class="nav-link active" aria-current="page" href="/">Home</a> -->
                  <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                  <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <img class="logo" src="{{ asset ('images\logo.png') }}" alt="logo" ;>
      <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
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
            <div class="col-sm-8 col-md-7 py-3">
              <h2 class="text-body-secondary">Benvenuto {{ Auth::user()->email }}
            </div>
            <div class="col-sm-4 offset-md-1 py-3">
              <h4>
                <ul class="list-unstyled">
                  <li>
                    <a class="nav-link active" aria-current="page" href="{{ route('articles.create') }}">Inserisci un articolo</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Guarda gli articoli</a>
                    <a class="nav-link active" aria-current="page" href="/end"></a>
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
        <img class="logo" src="{{ asset ('images\logo.png') }}" alt="logo" ;>
        <div class="container">
          <a href="/" class="navbar-brand d-flex align-items-center">
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