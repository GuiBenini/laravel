<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produtos - Criar</h1>
    <form action="{{route('produto/inserir')}}" method="POST">
    @csrf
        <p>Nome</p>
        <input type="text" name="nome" />
        <p>Descrição</p>
        <textarea name="descricao"></textarea>
        <p>Preço</p>
        <input type="text" name="preco" />
        <input type="submit"/>
    </form>

</body>
</html>