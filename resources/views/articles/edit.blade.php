<x-layout>
  <x-navbar />
  <div class="container"> 
    <h1>Modifica Articolo</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <label for="title">Titolo:</label>
      <input value="{{$article->title}}" type="text" id="title" name="title"><br><br>
      
      <label for="description">Descrizione:</label>
      <input value="{{$article->description}}" type="text" id="description" name="description"><br><br>
      
      <label for="years">Anno:</label>
      <input value="{{$article->years}}" type="text" id="years" name="years"><br><br>
      
      <label for="image">Immagine:</label>
      <input type="file" id="image" name="image"><br><br>
      
      <input type="submit" value="Submit" class="btn btn-success rounded-pill px-3"> 
    </form>
  </div>
</x-layout>
