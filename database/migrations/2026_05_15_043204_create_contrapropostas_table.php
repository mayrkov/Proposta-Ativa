<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('contrapropostas', function (Blueprint $table) {
        $table->id();
        // Relacionamento com a tabela de postagens [cite: 66]
        $table->foreignId('postagem_id')->constrained('postagens')->onDelete('cascade');
        
        // Relacionamento com a tabela de usuários (Alunos) [cite: 58, 67]
        $table->foreignId('aluno_id')->constrained('users')->onDelete('cascade');
        
        // Campos obrigatórios conforme seu dicionário de dados [cite: 62]
        $table->text('justificativa_ajuste');
        $table->integer('carga_horaria_proposta');
        
        // Status da negociação [cite: 29, 62]
        $table->enum('status', ['pendente', 'aceito', 'recusado'])->default('pendente');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrapropostas');
    }
};
