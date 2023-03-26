<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
</head>


{!! Form::open(['url' => 'categoria/' . $categoria->id, 'method' => 'put']) !!}

{{ Form::label('nome', 'Nome:') }}<br>
{{ Form::text('nome', $categoria->nome) }}<br>

{{ Form::submit('Enviar') }}

{!! Form::close() !!}