@extends('templates/layout')

@section('titulo', 'Página de Produto - Ver')

@section('corpo')
    <h1>Produtos - Ver</h1>
    {{ $prod->nome }}
    {{ $prod->descricao }}
    {{ number_format($prod->preco, 2) }}
@endsection