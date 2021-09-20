<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
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
}
