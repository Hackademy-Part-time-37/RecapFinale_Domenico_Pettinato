<x-layout>
  <x-navbar/>
<body>
  <h1>Modifica Articolo</h1>
    <div class="containder">
  <form action="{{route('articles.update',['article'=> $article])}}" method="POST"" method="get" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="Title">Titolo:</label>
  <input value="{{$article->title}}" type="text" name="name"><br><br>
  <label for="description">Descrizione:</label>
  <input value="{{$article->description}}" type="text" name="categoryes"><br><br>
  <label for="years">Anno:</label>
  <input value="{{$article->years}}" type="text" name="years"><br><br>
  <label for="Immage">Logo:</label>
  <input type="file" name="image"><br><br>
  <input type="submit" value="Submit" button class="btn btn-success rounded-pill px-3" type="button"></button>
</form>
</div>
</body>
</x-layout>