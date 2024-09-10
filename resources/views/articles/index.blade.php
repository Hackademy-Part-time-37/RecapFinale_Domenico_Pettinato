<x-layout>
    <x-navbar />

    <div class="col-12 d-flex justify-content-center mt-3">
        <h1>Elenco Articoli</h1>
    </div>

    <div class="row">
        @foreach ($articles as $article)
        <div class=" col-3 md-4 mb-5">
            <div class="card shadow-sm">
                <!-- Immagine dell'articolo -->
                @if (filter_var($article->image, FILTER_VALIDATE_URL))
                <!-- Se è una URL, mostra direttamente l'immagine dalla URL -->
                <img src="{{ $article->image }}" alt="Immagine dell'articolo">
                @else
                <!-- Se non è una URL, assume che sia un path e utilizza Storage::url -->
                <img src="{{ Storage::url($article->image) }}" alt="Immagine dell'articolo">
                @endif

                <div class="card-body">
                    
                        <h1 class="h5">Titolo: {{ $article->title }}</h1>
                        
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="btn-group">
                            <a href="{{ route('articles.show', ['article' => $article]) }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </a>
                            <a href="{{ route('articles.edit', ['article' => $article]) }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>