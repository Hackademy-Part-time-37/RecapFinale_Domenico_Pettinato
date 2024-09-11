<x-layout>
    <x-navbar />

    <body>
        <div class='container mt-5'>
            <h1>Titolo : {{$article->title}}</h1>
            <p>Descrizione : {{$article->description}}</p>
            <p>Anno: {{$article->years}}</p>
            <img src="{{ $article->image }}">
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