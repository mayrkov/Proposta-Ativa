<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contraproposta extends Model
{
    // O array
    protected $fillable = [
        'postagem_id',
        'aluno_id',
        'justificativa_ajuste',
        'carga_horaria_proposta',
        'status',
    ];

    // Relacionamento Contra Proposta a uma postagem
    public function postagem()
    {
        return $this->belongsTo(postagem::class);
    }

    // Relacionamento Contraproposta perntence a aluno
    public function aluno()
    {
        return $this->belongsTo(User::class, 'aluno_id');
    }
}
