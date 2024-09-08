<x-layout>
    <x-navbar />

    <div class="col-12 d-flex justify-content-center mt-5">
        <h1>Elenco Articoli</h1>
    </div>

    <div class="row">
        @foreach ($articles as $article)
        <div class="col-12 col-md-4 mb-4">
            <div class="card shadow-sm">
                <!-- Immagine dell'articolo -->
                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine Articolo">

                <div class="card-body">
                    <li>

                        <h1 class="h5">Titolo: {{ $article->title }}</h1>
                        <!-- <p>Descrizione: {{ $article->description }}</p>
                        <p>Anno: {{ $article->years }}</p> -->

                    </li>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="btn-group">
                        <a href="{{ route('articles.store', ['article' => $article]) }}">
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