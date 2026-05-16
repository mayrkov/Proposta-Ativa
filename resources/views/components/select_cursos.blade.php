@props(['disabled' => false])

<Select @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
  <option value="ADM">Analise e Desenvolvimento de Sistemas</option>
  <option value="Aluno">Odontologia</option>
  <option value="Professor">Medicina Veterinária</option>
</Select>