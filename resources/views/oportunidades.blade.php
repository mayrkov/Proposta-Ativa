<h1>Oportunidades Disponíveis</h1>

@foreach($vagas as $vaga)
    <div style="border: 1px solid #ccc; padding: 20px; margin-bottom: 20px;">
        <h3>{{ $vaga->titulo }}</h3>
        <p>{{ $vaga->descricao }}</p>
        <p><strong>Carga Horária Original:</strong> {{ $vaga->carga_horaria }}h</p>

        <hr>
        <h4>Enviar Contraproposta</h4>
        
        <form action="{{ route('contraproposta.store', $vaga->id) }}" method="POST">
            @csrf <div>
                <label>Sua justificativa para o ajuste:</label><br>
                <textarea name="justificativa_ajuste" placeholder="Ex: Só posso 10h por semana..." required></textarea>
            </div>

            <div>
                <label>Sua sugestão de carga horária:</label><br>
                <input type="number" name="carga_horaria_proposta" required>
            </div>

            <button type="submit" style="background-color: #4b0082; color: white; padding: 10px;">
                Enviar Candidatura
            </button>
        </form>
    </div>
@endforeach