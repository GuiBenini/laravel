    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>  
        <h1>Noticias - Criar</h1>
        <form action="{{route('noticia/inserir')}}" method="POST">
        @csrf
            <p>Nome</p>
            <input type="text" name="nome" value="{{old('nome')}}"/>
            <p>Descrição</p>
            <textarea name="descricao"></textarea>
            <p>Data</p>
            <input type="text" name="data" /><br>
            <br>    
            <input type="submit" value="Enviar Cadastro"/>
        </form>

    </body>
    </html>