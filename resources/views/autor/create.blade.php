<div class="content">
    <form method="post" action="{{ route('autor.store')}}">
        <div class="teste">
            <input type="hidden" name="_token" value="{{csrf_token()  }}">
            <h1 style="text-align:center ;">CADASTRO DE AUTOR</h1>
            <div class="teste1">
                <h2> Nome: </h2><input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="{{old('nome')}}">
            </div>
            <h2> Ano nascimento:</h2> <input type="text" name="dt_nasc" id="dt_nasc" placeholder="Digite seu ano de nascimento" value="{{old('dt_nasc')}}">
            <h2> Cidade:</h2> <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade" value="{{old('cidade')}}">
            <h2> Número:</h2> <input type="text" name="numero" id="numero" placeholder="Digite seu telefone" value="{{old('numero')}}">
            <a style="align-items: center; text-align:center; padding-top: 10px;"><button type="submit"> Enviar</button>
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