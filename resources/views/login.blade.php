@extends("templates.template")
@section("titulo", "Login")


@section('login')
<div class="box-scan">
    <div class="scan">
        <button class='botao'>
            <i class="bi bi-qr-code-scan"></i><br> LER QRCODE
        </button>

<<<<<<< HEAD
    </div>
</div>

<div class="box-formulario">
    <form action="">
        <!-- TEXT -->
        <div class='text-login'>
            <p>Login</p>
        </div>

        <div class="login">
            <label for="">Usuario</label>
            <input type="email" name="" id="">
        </div>

        <div class="passwd">
            <label for="">Senha</label>
            <input type="password" name="" id="">
        </div>

        <div class="btn">
            <button class='btn-confirm'>Entrar</button></div>
    </form>
</div>
@endsection