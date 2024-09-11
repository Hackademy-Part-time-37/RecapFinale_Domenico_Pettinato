<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SelfWorkFinale</title>
</head>
<body style="background-color:#eadaa2;">
<div class="p-3 mb-2 bg-body-secondary">
    {{$slot}}
</div>
</body>
</html>