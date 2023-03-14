<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Postagem</title>
</head>

<body>
    <strong>id:</strong>{{ $postagem->id}}<br>
    <strong>Título:</strong>{{ $postagem->id}}<br>
    <strong>Conteúdo:</strong>{{ $postagem->id}}<br>    
    <br><br>
    Comentários:<br>
    @foreach ($postagem->comentarios as $value)
        {{$value->conteudo }}<br>
    @endforeach

</body>
</html>