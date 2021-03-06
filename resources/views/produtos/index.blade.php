@extends('templates/layout')

@section('titulo', 'Página de Produtos')

@section('corpo')

 @if(session('usuario'))
    olá {{session('usuario.nome')}}.
    <a href="{{route('usuario.logout')}}">
        Click para Sair
    </a>
@else
    <a href="{{route('usuario.index')}}">
        Click para Login
    </a>
@endif

    <h1>Index de Produto</h1>

    <p><a href="{{ route('produto/criar') }}">Criar um produto</a></p>
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
        @foreach($prods as $prod)
        <tr>
            <td>
                <a href="{{route('produto/ver', $prod->id)}}">
                {{ $prod->nome }}
                </a>
            </td>
            <td>{{ $prod->preco }}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection