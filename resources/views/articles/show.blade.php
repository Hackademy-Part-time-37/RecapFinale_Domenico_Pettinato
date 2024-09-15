<x-layout>
    <x-navbar />

    <body>
        <div class="container mt-4">
            <h1>Titolo : {{$article->title}}</h1>
            <p>Descrizione : {{$article->description}}</p>
            <p>Anno: {{$article->years}}</p>
            <!-- Immagine dell'articolo -->
            @if (filter_var($article->image, FILTER_VALIDATE_URL))
            <!-- Se è una URL, mostra direttamente l'immagine dalla URL -->
            <img src="{{ $article->image }}" alt="Immagine dell'articolo">
            @else
            <!-- Se non è una URL, assume che sia un path e utilizza Storage::url -->
            <img src="{{ Storage::url($article->image) }}" alt="Immagine dell'articolo">
            @endif
        </div>
        <div class="container mt-3">
            <a href="{{ route('articles.index', ['article' => $article]) }}">
                <button type="button" class="btn btn-outline-dark rounded-pill">Back</button>
        </div>
        <div class="container mt-3">
            <form action="{{route('articles.destroy', [ 'article' => $article['id']])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger rounded-pill">Delete</button>
        </div>
    </body>
</x-layout>