@extends('templates/layout')

@section('titulo', 'Página inicial')

@section('corpo')
    <h1>Página inicial do site legal</h1>
    <p>Você está entrando no site legal</p>
    <p><a href="{{ route('produto') }}">Produtos</a></p>

@endsection