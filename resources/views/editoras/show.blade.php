<h1> DETLAHES DA EDITORA {{$editoras->nome}} </H1>

<ul>
    <li>Nome: {{$editoras->nome}}</li>
    <li>Local: {{$editoras->local}}</li>
    <li>Site: {{$editoras->site}}</li>

</ul>

<form action="{{route('editoras.destroy', $editoras->id) }}" method="post">
 @csrf
 <input type="hidden" name="_method" value="delete">
 <button type="submit"> Deletar a editora {{$editoras->nome}}</button>

</form>