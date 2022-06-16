<h1> Editar Livro {{ $livro->titulo}} </h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p> {{ $error}}</p>
        @endforeach
    @endif




<div>
<p><img src="{{ url("storage/{$livro->capa}") }}" alt="{{ $livro->titulo }}" style= "max-width:100px">
<p>
    <form method="post" action="{{ route('livros.update', $livro->id)}}">
        @method('put')
        @csrf
    <p> Título: <input type="text" name="titulo" id="titulo" placeholder="Digite um titulo" value="{{$livro->titulo}}">
    <p> Ano: <input type="text" name="ano" id="ano" placeholder="Digite o ano" value="{{$livro->ano}}">
    <p> Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite o idioma" value="{{$livro->idioma}}">
    <p> ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite isbn" value="{{$livro->isbn}}">
    
    <p>Capa: <input type="file" name="capa" id ="capa" value="{{$livro->capa}}">
    <p><button type="submit"> Enviar</button>
    </form>
</div>

<style>
    body{
        background-color: blanchedalmond;
    }
    </style>