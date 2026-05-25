<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;       
use App\Models\Contraproposta; 

class PostagemController extends Controller
{
    public function index()
    {
        // Busca todas as vagas
        $vagas = Postagem::all();

        // Aplica as horas aprovadas 
        $total_horas = Contraproposta::where('aluno_id', auth()->id())
                                        ->where('status', 'aceito') // Ajustado para 'aceito'
                                        ->sum('carga_horaria_proposta');

        return view('dashboard', compact('vagas', 'total_horas'));
    }
}