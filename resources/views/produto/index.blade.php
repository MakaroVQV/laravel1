<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style></style>
    </head>
    <body>
        Produtos<br>
        <a href="{{url('produto/create')}}">CRIAR</a>
        @if (session('status'))
        <div class="alert alert-success">
            {{session ('status')}}
        </div>
        @endif

    <table>
    <tr>
        <th>Nome</th>
        <th>Ação</th>
    </tr>
    <tr>
    @foreach ($produtos as $value)
    </tr>
    <tr>
        <td>{{$value->nome }}</td>
        <td><a href="{{url('produto/' . $value->id)}}">Visualizar</a></td>
    </tr>
    @endforeach
</table>
    </body>
</html>
