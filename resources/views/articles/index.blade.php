
<x-layout>
    @auth
    <body>
        <div>
            <x-navbar />
            <div class="col-12  d-flex justify-content-center mt-5">
                <h1>
                    Benvenuto {{Auth::user()->name}}
                </h1>
            </div>
            <img src="{{ asset ('images\smile.jfif') }}" class="img-fluid" alt="image" width="300" height="400" > 
        </div>
    </body>
    @endauth

    @guest

    NON SEI AUTENTICATO

    @endguest

</x-layout>