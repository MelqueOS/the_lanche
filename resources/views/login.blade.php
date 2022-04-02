

@extends("templates.template")
@section("titulo", "Login")
@section('login')

    
    <div class="caixalogin">
        <div class="linha"></div>
    <div class="caixal">
        <form class="formlogin">
            <img class="logologin"src="img/logo.svg">
        <div class="botoes">
            <div class="">
                <button class="btngoogle">ENTRAR COM GOOGLE</button>
            </div>
            <div class="">
                <button class="btnemail">ENTRAR COM EMAIL</button>
            </div>
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