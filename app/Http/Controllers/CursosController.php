<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function criar() {
        return view('auth.registrar-curso');
    }

    public function store(Request $request){

        // validação dos dados
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'horas' => ['required', 'integer', 'min:1']
        ]);

        // envio para o bd
        Curso::create([
        'nome' => $request->nome,
        'horas' => $request->horas,
        ]);

        // redireciona para 
        return redirect(route('curso.criar'))->with('status', 'Cadastrado com sucesso!');
    }
}
