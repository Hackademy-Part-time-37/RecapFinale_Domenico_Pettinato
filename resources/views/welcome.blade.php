<x-layout>
    <x-navbar />
    @guest
    <!-- immagine personale -->
    <div class="position-relative">
        <img src="{{ asset('images/article.png') }}" alt="welcome background" class="img-fluid w-100 vh-100"">
    <div class=" form-overlay-welcome-guest">
        <h1 class="container text-white">
            Registrati per leggere gli Articoli
        </h1>
    </div>
    </div>
    @endguest
    @auth
    <!-- immagine personale -->
    <div class="position-relative">
        <img src="{{ asset('images/article.png') }}" alt="welcome background" class="img-fluid w-100 vh-100"">
    <div class=" form-overlay-welcome">
        <h1 class="container text-white">
            Buona lettura sul mio sito
        </h1>
    </div>
    </div>
    @endauth
    </html>
</x-layout>