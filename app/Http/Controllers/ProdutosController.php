<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{

    public function home()
    {
        $produtos = Produto::get();

        return view('produtos.home', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {

        $preco = $request->tipo == 1 ? $request->preco :  "";

        Produto::create([
            'nome' => $request->nome,
            'imagem' => $request->imagem,
            'tipo' => $request->tipo,
            'preco' => $preco
        ]);

        return "Produto Criado com Sucesso!";
    }

    public function index()
    {
        $produtos = Produto::get();

        return view('produtos.visualizacao', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $preco = $request->tipo == 1 ? $request->preco :  "";

        $produto->update([
            'nome' => $request->nome,
            'imagem' => $request->imagem,
            'tipo' => $request->tipo,
            'preco' => $preco
        ]);

        return "Produto atualizado com sucesso!";
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produtos = Produto::findOrFail($id);
        $produtos->delete();

        return "Produto Excluído com Sucesso";
    }
}
