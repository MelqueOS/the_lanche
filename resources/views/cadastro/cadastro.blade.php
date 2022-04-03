@extends("templates.templatecadastro")
@section("titulo", "Cadastro")
@section('cadastro')

<div class="cadastrobotoes">
            <div>
                <p class="textopergunta">Identifique-se </p>
            </div>
            <div class="cadastroinputs">
            <div class="">
                <button class="btngoogle">ENTRAR COM  <img id="google" src="img/googles.svg">OOGLE</i></button>
            </div>
            <div class="">
                <button class="btnemail">ENTRAR COM EMAIL</button>
            </div>
            
            <div class="textoentrar">
                <a >ENTRAR COMO CONVIDADO</a>
            </div>
            </div>
        </div>

@endsection