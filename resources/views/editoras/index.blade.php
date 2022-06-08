<p> <a href="{{ route('editoras.create')}}"> Inserir nova editora </a></p>

<hr>

@if (session('message'))
    <div>
        {{ session('message')}}

    </div>
@endif


<hr>
@foreach ($editoras as $editora)
<p> 
    {{$editora->nome}}
    <a href="{{route('editoras.show', $editora->id)}}"> Ver detalhes</a>
    <a href="{{route('editoras.edit', $editora->id)}}"> []Editar]</a>

</p>
@endforeach
</div>
<hr>
