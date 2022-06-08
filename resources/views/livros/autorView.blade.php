Lista de autores
@foreach (@$autor as $autor)

<p> Nome: {{ $autor->nome}}</p>
<p> Data Nascimento: {{ $autor->dt_nasc}}</p>
<p> Cidade: {{ $autor->cidade}}</p>
<p> Número: {{ $autor->numero}}</p>