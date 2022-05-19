@extends('templates/layout')

@section('corpo')
    <h1>Index de Produto</h1>
    <p><a href="{{ route('produto.criar') }}">Criar um Produto</a></p>
@endsection
