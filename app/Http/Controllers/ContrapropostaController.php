<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contraproposta; // Corrigido o caminho para a Model
use Illuminate\Support\Facades\Auth; // Corrigido Facetas -> Facades

class ContrapropostaController extends Controller
{
    public function store(Request $request, $postagem_id)
    {
        // Validação de campos vazios
        $request->validate([
            'justificativa_ajuste' => 'required|min:30',
            'carga_horaria_proposta' => 'required|numeric', // Corrigido o "a" a mais
        ]);

        // Salvar No Banco
        Contraproposta::create([
            'postagem_id' => $postagem_id,
            'aluno_id' => Auth::id(), // Pega o id do aluno logado
            'justificativa_ajuste' => $request->justificativa_ajuste, // Removido espaço em branco
            'carga_horaria_proposta' => $request->carga_horaria_proposta, 
            'status' => 'pendente',
        ]);

        // REDIRECIONAR com mensagem de sucesso 
        return redirect()->back()->with('success', 'Sua proposta foi enviada com sucesso!');
    }
}