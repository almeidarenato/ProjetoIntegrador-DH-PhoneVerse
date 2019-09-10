<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" defer></script>
    <title>Teste</title>
</head>
<body>
    <h1>Página de teste</h1>
    <p>@foreach ($respostas as $resposta)
        {{$resposta}}
    @endforeach</p>

</body>
</html>
