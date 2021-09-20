<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cadastrar um novo produto </title>

</head>

<body>
    <form action="{{ route('registar_produto') }}" method="POST">
        @csrf
        <label for="">Nome </label><br>
        <input type="text" name="nome"><br>
        <label for="">imagem </label><br>
        <input type="text" name="imagem"><br>
        <label for=""> Tipo </label><br>
        <select name="tipo">
            <option value="0"> Sem preço fixo </option>
            <option value="1"> Com preço fixo </option>
        </select><br>


        <label for=""> Preço </label><br>
        <input type="text" name="preco"> <br>
        <button>Salvar </button>
    </form>
</body>

</html>