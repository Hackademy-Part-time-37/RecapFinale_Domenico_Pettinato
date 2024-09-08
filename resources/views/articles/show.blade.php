<x-layout>
<x-navbar />

    <body>
        <div class='container mt-5'>
            <h1>Titolo : {{$article->title}}</h1>
            <p>Descrizione : {{$article->description}}</p>
            <p>Anno: {{$article->years}}</p>
            <img src="{{Storage::url($article->image)}}">
        </div>

        <div class="container mt-3">
        <form action="{{route('articles.destroy', [ 'article' => $article['id']])}}" method="POST">
        @csrf
        @method('DELETE')

         <button type="submit" class="btn btn-danger rounded-pill" >Delete</button>    
        </div>
        
    </body>
</x-layout>