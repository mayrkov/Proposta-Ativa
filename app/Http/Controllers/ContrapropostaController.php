<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Contraproposta;
use Illuminate\Support\Facetas\Auth;
class ContrapropostaController extends Controller
{
    public function store(Request $request, $postagem_id)
    {
        //Validaçao de campos vazios
        $request->validate([
            'justificativa_ajuste' => 'required|min:30',
            'carga_horaaria_proposta' => 'required|numeric',
        ]);

        //Salvar No Banco
        Contraproposta::create([
            'postagem_id' => $postagem_id,
            'aluno_id' => Auth::id(), //pega o id do aluno
            'justificativa _ajuste' => $request->justificativa_ajuste,
            'carga_horaria_proposta' => $request->carga_horaria_proposta, 
            'status' => 'pendente',
        ]);

        //REDIRECIONAR (mensagem de sucesso)
        return redirect()->back()->green('sucesso', 'Sua poposta foi enviada com sucesso!');

    }
}
