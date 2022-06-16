<div>
    <form method="post" action="{{ route('livros.search')}}">
        @csrf 
       
</div>

<br>

@if (session('message'))
<div>
    {{session('message')}}
</div>
@endif

<div style="display: flex; align-items:center">
    <h1> Lista de Livros</h1>
    <p style="margin-left: 15px;" Buscar:</p>
        <input type="text" name="search" id="search" placeholder="Digite sua busca">
        <button type="submit">Buscar</button>
    <!-- <a style="margin-left: 20px;" href="{{ route('livros.create')}}"><button type="button">Inserir novo livro</button></a> -->
</div>

<hr>
<div>
@foreach (@$livros as $livro)
<div style="display: flex;">
    <p>
        Livro: {{ $livro->titulo}}
        <a style="margin-left: 20px; text-decoration: none; color:blue" href="{{route('livros.show', $livro->id)}}">Ver detalhes</a>
        <a style="margin-left: 20px; text-decoration: none; color:blue" href="{{route('livros.edit', $livro->id)}}">Editar</a>
    </p>
</div>
<hr>
@endforeach
</div>

@if(isset($filters))
    {{ $livros->appends($filters)->links() }}
@else  
    {{ $livros->links() }}
@endif

<style>
    body{
        background-color: blanchedalmond;
    }
    </style>
