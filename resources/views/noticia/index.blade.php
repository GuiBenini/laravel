@extends('templates/layout')

@section('titulo', 'Página de Noticias')

@section('corpo')
    <h1>Index de Noticia</h1>

    <p><a href="{{ route('noticia/criar') }}">Criar uma Noticia</a></p>

    <table border="1">
        <tr>
            <th>Noticia</th>
            <th>Descricao</th>
        </tr>

        @foreach($nots as $not)
        <tr>
            <td>
                <a href="{{route('noticia/ver', $not->id)}}">
                {{ $not->nome }}
                </a>
            </td>
            <td>{{ $not->descricao }}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection