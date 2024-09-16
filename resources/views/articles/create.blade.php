<x-layout>
  <x-navbar />
  <body>
    <div class="position-relative">
      <!-- L'immagine di sfondo -->
      <img src="{{ asset('images/create.png') }}" alt="create background" class="img-fluid w-100 vh-100">
      <!-- Form sovrapposto -->
     <div class="form-overlay-create">

      <div class="col-12  mt-3 d-flex justify-content-center">
        <h1 class=" mb-6 bg-yellow-400 text-white">Inserisci il tuo Articolo</h1>
      </div>

        <div class="containder d-flex justify-content-center form-floating mb-3">
          <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title"></label>
            <input type="text" name="title" placeholder="Titolo"><br><br>

            <label for="description"></label>
            <input type="text" name="description" placeholder="Descrizione"><br><br>

            <label for="years"></label>
            <input type="text" name="years" placeholder="Anno"><br><br>

            <label for="Immagine" class="text-white">Logo:</label>
            <input type="file" name="image" class="text-white"><br><br>

            <a href="{{ route('articles.index', ['article' => $article]) }}"></a>
            <button type="button" class="btn btn-success rounded-pill">Back</button>
            <input type="submit" value="Submit" button class="btn btn-success rounded-pill px-3" type="button"></button>
          </form>
        </div>
      </div>
    </div>
  </body>
</x-layout>