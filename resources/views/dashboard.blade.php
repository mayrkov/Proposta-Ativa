<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Aluno - Provisório</title>
    <style>
        /* Estilização mínima apenas para separar os blocos visualmente */
        body { font-family: sans-serif; margin: 30px; line-height: 1.6; }
        .bloco { border: 2px dashed #ccc; padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; }
        .status-pendente { color: orange; font-weight: bold; }
        .status-aceito { color: green; font-weight: bold; }
        .status-recusado { color: red; font-weight: bold; }
        .aviso { background-color: #fff3cd; padding: 10px; border: 1px solid #ffeeba; }
    </style>
</head>
<body>

    <h1>Painel Acadêmico do Aluno (Provisório - Estrutural)</h1>
    <p><em>Atenção: Design, cores definitivas e responsividade serão aplicados na etapa de UI/UX.</em></p>

    <hr>

    <div class="bloco">
        <h2>[CONCLUÍDO] Título: Gestão de Horas</h2>
        <p><strong>Total de Horas Validadas no Banco de Dados:</strong></p>
        <div style="font-size: 24px; font-weight: bold; background: #eee; display: inline-block; padding: 10px 20px;">
            {{ $total_horas ?? 0 }} horas
        </div>
        <p><small>*Este contador soma automaticamente apenas as contrapropostas com status 'aceito'.</small></p>
    </div>

    <div class="bloco">
        <h2>[CONCLUÍDO] Título: Contraproposta (Listagem de Oportunidades e Envio)</h2>
        
        <h3>Oportunidades Disponíveis (Vagas)</h3>
        @if(isset($vagas) && $vagas->count() > 0)
            <ul>
                @foreach($vagas as $vaga)
                    <li>
                        <strong>{{ $vaga->titulo }}</strong> - Carga Horária Padrão: {{ $vaga->carga_horaria }}h
                        <br>
                        <form action="{{ route('contraproposta.store', $vaga->id) }}" method="POST" style="margin-top: 10px; margin-bottom: 20px;">
                            @csrf
                            <label>Sua Justificativa (Mínimo 30 caracteres):</label><br>
                            <textarea name="justificativa_ajuste" rows="2" cols="50" required></textarea><br>

                            <label>Sua Carga Horária Sugerida:</label><br>
                            <input type="number" name="carga_horaria_proposta" required><br>

                            <button type="submit">Enviar Contraproposta</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="aviso">Nenhuma vaga de atividade complementar foi cadastrada na tabela "postagens" ainda.</p>
        @endif
    </div>

    <div class="bloco" style="opacity: 0.7;">
        <h2>[FUTURO] Título: Atividades do Aluno (Em desenvolvimento)</h2>
        <p class="aviso">⚠️ <strong>Espaço Reservado:</strong> Esta seção exibirá futuramente o histórico detalhado</p>
        
        <table border="1" cellpadding="5" style="width: 100%; border-collapse: collapse; background: #fff;">
            <thead>
                <tr style="background: #eee;">
                    <th>Atividade / Vaga</th>
                    <th>Horas Propostas</th>
                    <th>Data de Envio</th>
                    <th>Status Atual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><small>Exemplo de Integração Futura</small></td>
                    <td><small>--</small></td>
                    <td><small>--</small></td>
                    <td><span class="status-pendente">Pendente</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>