<hr>

@if (session('message'))
<div>
    {{session('message')}}
</div>
@endif

<div style="display: flex; align-items:center">
    <h1> Lista de Autores</h1>
    <a style="margin-left: 20px;" href="{{ route('autor.create')}}"><button type="button">Inserir novo autor</button></a>
</div>

<hr>
@foreach (@$autors as $autor)

<div style="display: flex;">
    <p>
        Autor: {{ $autor->nome}}
        <a style="margin-left: 20px; text-decoration: none; color:blue" href="{{route('autor.show', $autor->id)}}">Ver detalhes</a>
        <a style="margin-left: 20px; text-decoration: none; color:blue" href="{{route('autor.edit', $autor->id)}}">Editar</a>
    </p>
</div>
<hr>
@endforeach