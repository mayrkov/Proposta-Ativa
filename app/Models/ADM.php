<?php

namespace App\Models;
use Illuminate\Support\Facades\Hash;

class ADM extends User {

  public function criar_conta(array $dados){
    // Criptografa a senha antes de salvar
    $dados['password'] = Hash::make($dados['password']);
    
    // Dependendo do tipo, criamos com o respectivo Model
    if ($dados['tipo'] === 'Aluno') {
        return Aluno::create($dados);
    }
    if ($dados['tipo'] === 'Professor') {
        return Professor::create($dados);
    }
    
    // Se for outro ADM
    return ADM::create($dados); 
  }

}