<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        //Busca vagas 
        $vagas = Postagem::all();

        //Aplica as horas aprovadas
        $total_horas = Contraproposta::where('aluno_id', auth()->id())
                                        ->where('status', 'aprovado')
                                        ->sum('carga_horaria_proposta');

        return view('dashboard', compact('vagas', 'total_horas'));
    }
}
