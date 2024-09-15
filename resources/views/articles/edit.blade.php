<x-layout>
  <x-navbar />

  <body>
    <div class="position-relative">
      <!-- L'immagine di sfondo -->
      <img src="{{ asset('images/edit.png') }}" alt="edit background" class="img-fluid w-100 vh-100">
      <!-- Form sovrapposto -->
      <div class="form-overlay-edit">
        <h1 class="text-white">Modifica Articolo</h1>
        <div class="col-12  mt-3 d-flex justify-content-center form-floating mb-3">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <label for="title" class="text-danger">Modifica Titolo:</label><br>
              <input value="{{$article->title}}" type="text" id="title" name="title"><br><br>

              <label for="description" class="text-danger">Modifica Descrizione:</label><br>
              <input value="{{$article->description}}" type="text" id="description" name="description"><br><br>

              <label for="years" class="text-danger">Modifica Anno:</label><br>
              <input value="{{$article->years}}" type="text" id="years" name="years"><br><br>

              <label for="image" class="text-danger">Modifica Immagine:</label>
              <input type="file" id="image" name="image" class="text-danger" ><br><br>

              <a href="{{ route('articles.index', ['article' => $article]) }}">
              <button type="button" class="btn btn-success rounded-pill">Back</button>
              
              <input type="submit" value="Submit" class="btn btn-success rounded-pill px-3">
            </form>
          </div>
        </div>
      </div>
  </body>
</x-layout>