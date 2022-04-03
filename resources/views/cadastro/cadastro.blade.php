@extends("templates.template")
@section("titulo", "Cadastro")
@section('conteudo')

<div class="cadastrobotoes">
            <div>
                <p class="textopergunta" align="center">Identifique-se </p>
            </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt" type="text">
                </div>
                <div class="">
                    <input class="inpt" type="text">
                </div>
                <div class="">
                    <input class="inpt" type="text">
                </div>
                <div class="btn">
                    <button class='btn btn-primary'>Entrar<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

@endsection