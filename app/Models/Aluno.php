<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'email', 'password', 'tipo', 'identificador', 'curso'])]

class Aluno extends User {

  public function criar_contraproposta(){
    // Lógica
  }

}