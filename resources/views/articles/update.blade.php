<!-- <x-layout>

  <body>
    <div class="containder">
      <form action="{{route('articles.update')}}" method="POST"" method=" get" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="title">Titolo:</label>
        <input type="text" name="title"><br><br>
        <label for="description">Descrizione:</label>
        <input type="text" name="description"><br><br>
        <label for="years">Anno:</label>
        <input type="text" name="years"><br><br>
        <label for="Immage">Logo:</label>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Submit" button class="btn btn-success rounded-pill px-3" type="button"></button>
      </form>
    </div>
  </body>
</x-layout> -->