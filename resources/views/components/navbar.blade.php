<div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="nav-link active" >SelfWorkFinale</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @guest
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
          <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
        @endguest

        @auth
          <form method="POST" action="{{route('logout')}}" class="form ">
                    @csrf
                    <div class="mx-2">
                        <button class=" rounded-pill " type="submit">Logout </button>
                    </div>
                </form>
          @endauth
        </div>
      </div>
    </div>
  </nav>

</div>