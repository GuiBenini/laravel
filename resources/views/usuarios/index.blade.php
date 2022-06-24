@extends('templates.layout')
@section('title', 'Login')
@section('corpo')
 <h1>Login</h1>

@if(session('erro'))
    <p>{{session('erro')}}</p>

@endif

<form method="post">
     @csrf
    <input type="text" name="email">
        <br><br>
    <input type="password" name="senha">
        <br>
    <input type="submit" value="Acessar">
 </form>
@endsection