<div class="content">
    <form method="post" action="{{ route('editoras.store')}}">
    <div class="teste">
    <input type="hidden" name="_token" value="{{csrf_token()  }}">
    <p> Nome: </p><input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="{{old('nome')}}">
    <p> Local: </p><input type="text" name="local" id="local" placeholder="Digite o nome do local" value="{{old('local')}}">
    <p> Site: </p><input type="text" name="site" id="site" placeholder="Digite seu site" value="{{old('site')}}">
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