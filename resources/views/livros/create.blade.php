<h1 style="align-items: center; text-align:center">Cadastrar novo livro </h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p> {{ $error }}</p>
    @endforeach
@endif


<div class="content">
    <form method="post" action="{{ route('livros.store')}}" enctype="multipart/form-data">
    <div class="teste">
    <input type="hidden" name="_token" value="{{csrf_token()  }}">

    <div class="teste1"><p> Título:</p> <input type="text" name="titulo" id="titulo" placeholder="Digite um titulo" value="{{old('titulo')}}">
</div>
    <p> Ano: </p><input type="text" name="ano" id="ano" placeholder="Digite o ano" value="{{old('ano')}}">
    <p> Idioma:</p> <input type="text" name="idioma" id="idioma" placeholder="Digite o idioma" value="{{old('idioma')}}">
    <p> ISBN:</p> <input type="text" name="isbn" id="isbn" placeholder="Digite isbn" value="{{old('isbn')}}">
    <p><label for="editora">Editora:</label>
        <select name="editora_id" id="editora_id">
          @foreach ($editoras as $editora)
          <option value="{{ $editora->nome }}">{{ $editora->nome }}</option>
          @endforeach
        </select>
        <p>Capa: <input type="file" name="capa" id ="capa">

    
    <p><button type="submit"> Enviar</button>
</div>
    </form>
</div>
<style>
    .teste1 {
        display: flex;
        flex-direction: column;
    }

    body {
        margin: 0;
        background-color: midnightblue;
    }

    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        font-size: 18px;
    }

    form {
        display: flex;
        height: 80vh;
        align-items: center;

    }

    .teste {
        background-color: aquamarine;
        display: flex;
        justify-content: center;
        flex-direction: column;
        border-radius: 20px;
        box-shadow: 5px 5px 5px black;
        padding: 15px;

    }

    @media (min-width: 800px) {
        .teste {
            width: 700px;
        }
    }
</style>