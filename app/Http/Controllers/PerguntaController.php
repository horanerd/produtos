<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pergunta;

class PerguntaController extends Controller
{

    public function create()
    {
        return view('produtos.visualizacao');
    }

    public function store(Request $request)
    {
        Pergunta::create([
            'id_produto' => $request->nome,
            'pergunta' => $request->pergunta,
            'opcao' => $request->opcao

        ]);

        return "Pergunta cadastrada com sucesso!";
    }
}
