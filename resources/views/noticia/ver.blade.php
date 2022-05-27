@extends('templates/layout')

@section('titulo', 'Página de Noticia - Ver')

@section('corpo')
    <h1>Noticias - Ver</h1>
    {{ $not->nome }}
    {{ $not->descricao }}

@endsection