<x-layout>
    <x-navbar/>
<body>
<div class="col-12  mt-3 d-flex justify-content-center">
  <h1>Inserisci il tuo Articolo</h1>
</div>
    <div class="containder d-flex justify-content-center">
  <form action="{{route('articles.store')}}" method="POST" method="get" enctype="multipart/form-data">
    @csrf
  <label for="title">Titolo:</label>
  <input type="text" name="title"><br><br>
  <label for="description">Descrizione:</label>
  <input type="text" name="description"><br><br>
  <label for="years">Anno:</label>
  <input type="text" name="years"><br><br>
  <label for="Immagine">Logo:</label>
  <input type="file" name="image"><br><br>
  <input type="submit" value="Submit" button class="btn btn-success rounded-pill px-3" type="button"></button>
</form>
</div>
</body>
</x-layout>