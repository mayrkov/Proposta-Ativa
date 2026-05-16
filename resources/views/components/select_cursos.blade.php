@props(['disabled' => false])

<Select @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
  <option value="" selected disabled></option>
  <option value="ADS">Analise e Desenvolvimento de Sistemas</option>
  <option value="Odontologia">Odontologia</option>
  <option value="VET">Medicina Veterinária</option>
</Select>