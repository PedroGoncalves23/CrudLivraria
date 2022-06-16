<h1> Detalhes do autor {{ $autor->nome}} </h1>

<ul>
    <li>Data Nascimento: {{ $autor->dt_nasc}}</li>
    <li>Cidade: {{ $autor->cidade}}</li>
    <li>Número: {{ $autor->numero}}</li>
</ul>

<form action="{{ route('autor.destroy', $autor->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o autor {{$autor->autor}} </button>
</form>

<style>
    body {
        background-color: blanchedalmond;
    }
</style>