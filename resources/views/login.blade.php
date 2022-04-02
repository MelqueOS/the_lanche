

@extends("templates.template")
@section("titulo", "Login")
@section('login')

    
    <div class="cor">
        <div class="linha"></div>
    <div class="caixal">
        <form class="formlogin">
            <img class="logologin"src="imagens/Group47.svg">
        <div class="botoes">
        <div><button class="btngoogle">ENTRAR COM GOOGLE</button></div>
        <div><button class="btnemail">ENTRAR COM EMAIL</button></div>
        <div class="textoentrar">
            <a >ENTRAR COMO CONVIDADO</a>
        </div>
        </div>
        <div class="textocadastro">
            <a href="#">CADASTRO</a>
        </div>
    </div>
</form>

</div>
@endsection