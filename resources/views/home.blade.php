<x-layout>
    <x-navbar />
    @auth
    <body>
        <div class="position-relative">
             <img src="{{ asset('images/home.png') }}" class="img-fluid w-100 vh-100" alt="Background Image">
             <div class="form-overlay-home">
                <h1 class="container mt-1 px-1 text-white" >
                    Benvenuto {{ Auth::user()->name }} !!!
                    ti sei registrato con la mail {{ Auth::user()->email }} <br>
                    Buona Navigazione!
                </h1>
            </div>
        </div>
    </body>
    @endauth
    @guest

    NON SEI AUTENTICATO

    @endguest

</x-layout>


