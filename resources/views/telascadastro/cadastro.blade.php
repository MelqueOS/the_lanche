@extends("templates.template")
@section("titulo", $titulo)
@section('conteudo')

<div class="cadastrobotoes">
            <div>
                <p class="textopergunta" align="center">Identifique-se </p>
            </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt" placeholder="nome"type="text"required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="email"type="email" required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="senha"type="password"required>
                </div>
                <div class="btn">
                    <button class='btn btn-primary t'>Avançar<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

@endsection