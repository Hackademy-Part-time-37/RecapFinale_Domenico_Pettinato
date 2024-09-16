<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>SelfWorkFinale</title>
</head>
<div class="p-3 mb-2 bg-body-secondary ">
  {{$slot}}
</div>
<footer class="bg-body-tertiary text-center text-lg-start mt-2">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https:www.linkedin.com/in/domenico-pettinato">MimmoPettinato</a>
  </div>
  <!-- Copyright -->
</footer>

</html>