<div>


    <h1> Criar pergunta ao produto: </h1>

    <form action="{{ route('pergunta_produto') }}" method="POST">
        @csrf
        <label for="">Nome </label><br>
        <select name="nome">
            @foreach ($produtos as $produto)
            <option value={{ $produto->id }}> {{ $produto->nome }}</option>

            @endforeach
        </select>

        <br>


        <label for="">Pergunta </label><br>
        <input type="text" name="pergunta"><br>
        <label for=""> Opções </label><br>
        <input type="text" name="opcao"><br>



        <button>Salvar </button>
    </form>


</div>