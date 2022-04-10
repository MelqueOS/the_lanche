<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>

<body>

    <div class="container">
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

                <div class='title-form'>
                    <img class='logo ' src="{{asset('img/logo.svg')}}" alt="">
                    <p>ENTRAR</p>
                </div>

                <div class="btn">
                    <button style='width:65%;' class='btn-primary'>Entrar com <i class="bi bi-google" style='font-size: 20px;'></i>oogle
                    </button>
                </div>

                <div class='inputs'>
                    <div class="label-input-form login">
                        <label for="">Usuario</label>
                        <input type="email" name="" id="" required>
                    </div>
                    <div class="label-input-form passwd">
                        <label for="">Senha</label>
                        <input type="password" name="" id="" required>
                    </div>
                </div>

                <div class="btn">
                    <button class='btn-primary' style='width:65%;'>Entrar</button>
                </div>

                <div class="nv-cadastro">
                    Novo aqui? <a href="/1">Crie uma conta</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>