<h1> Editar Autor {{ $autor->nome}} </h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p> {{ $error}}</p>
        @endforeach
    @endif

<div>
    <form method="post" action="{{ route('autor.update', $autor->id)}}">
        @method('put')
        @csrf
    <p> Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{$autor->nome}}">
    <p> Data Nascimento: <input type="text" name="dt_nasc" id="dt_nasc" placeholder="Digite a data de nascimento" value="{{$autor->dt_nasc}}">
    <p> Cidade: <input type="text" name="cidade" id="cidade" placeholder="Digite a cidade" value="{{$autor->cidade}}">
    <p> Número: <input type="text" name="numero" id="numero" placeholder="Digite seu número" value="{{$autor->numero}}">
    <p><button type="submit"> Enviar</button>
    </form>
</div>