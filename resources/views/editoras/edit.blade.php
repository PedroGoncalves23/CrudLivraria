<h1> Editar Editora {{ $editoras->nome}} </h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p> {{ $error}}</p>
        @endforeach
    @endif

<div>
    <form method="post" action="{{ route('editoras.update', $editoras->id)}}">
        @method('put')
        @csrf
    <p> Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{$editoras->nome}}">
    <p> Local: <input type="text" name="local" id="local" placeholder="Digite o local" value="{{$editoras->local}}">
    <p> Site: <input type="text" name="site" id="site" placeholder="Digite o site" value="{{$editoras->site}}">
    
    <p><button type="submit"> Enviar</button>
    </form>
</div>