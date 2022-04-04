@extends("templates.template")
@section("titulo", "Login")


@section('conteudo')
<div class="box-scan">
    <div class="scan">
        <button class='botao'>
            <i class="bi bi-qr-code-scan"></i><br> LER QRCODE
        </button>
    </div>
</div>

<div class="box-formulario">
    <form action="">
        <!-- TEXT -->
        <div class='text-login'>
            <p>Login</p>
        </div>

        <div class="btn">
            <button class='btn-form'>Entrar com <i class="bi bi-google" style='font-size: 20px'></i>oogle
            </button>
        </div>

        <div class="label-input-form login">
            <label for="">Usuario</label>
            <input type="email" name="" id="" required>
        </div>

        <div class="label-input-form passwd">
            <label for="">Senha</label>
            <input type="password" name="" id="" required>
        </div>

        <div class="btn">
            <button class='btn-form'>Entrar</button>
        </div>

        <div class="nv-cadastro">
            Novo aqui? <a href="/2">Crie uma conta</a>
        </div>
    </form>
</div>
@endsection