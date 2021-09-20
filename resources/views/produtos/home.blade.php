<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Os produtos são: </h1>
    @foreach ($produtos as $produto)
        <p> <a href="produtos/ver/{{ $produto->id }}"> {{ $produto->nome }} </a></p>

    @endforeach
</body>

</html>
