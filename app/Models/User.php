<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'tipo', 'identificador'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    protected $table = 'users'; 

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
     public function newFromBuilder($attributes = [], $connection = null)
    {
        // Pega o tipo do usuário vindo do banco de dados
        $tipo = $attributes->tipo ?? null;

        // Decidimos qual Model instanciar com base no tipo
        if ($tipo === 'ADM') {
            $model = new ADM();
        } elseif ($tipo === 'Professor') {
            $model = new Professor();
        } elseif ($tipo === 'Aluno') {
            $model = new Aluno();
        } else {
            // Caso não tenha tipo (ou seja nulo), usa o User padrão
            $model = $this->newInstance([], true);
        }

        // Preenche o model com os atributos e conexão corretos
        $model->setRawAttributes((array) $attributes, true);
        $model->setConnection($connection ?: $this->getConnectionName());
        $model->fireModelEvent('retrieved', false);

        return $model;
    }
}
