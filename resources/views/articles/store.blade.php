<x-layout>
    <div class="container">
        <a href="{{route('articles.index',['article'=>$article])}}"
            button class="btn btn-warning rounded-pill px-3" type="button">Show
        </a>

        <!-- <button class="btn btn-primary rounded-pill px-3" type="button">Update</button>
        <button class="btn btn-danger rounded-pill px-3" type="button">Delete</button>
        <button class="btn btn-secondary rounded-pill px-3" type="button">Secondary</button>
        <button class="btn btn-success rounded-pill px-3" type="button">Success</button>
        <button class="btn btn-info rounded-pill px-3" type="button">Info</button>
        <button class="btn btn-light rounded-pill px-3" type="button">Light</button>
        <button class="btn btn-dark rounded-pill px-3" type="button">Dark</button>
        <button class="btn btn-link rounded-pill px-3" type="button">Link</button> -->
    
    </div>

    <body>
        <div class='container'>
            <h1>Titolo : {{$article->title}}</h1>
            <p>Descrizione : {{$article->description}}</p>
            <p>Anno: {{$article->years}}</p>
            <img src="{{Storage::url($article->image)}}">
        </div>
    </body>
</x-layout>