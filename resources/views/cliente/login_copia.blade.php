<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel='stylesheet' href="{{asset('css/padroes.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>

<body>
    <div class="container">
        <div class="box-scan">
            <div class="scan">
                <button class='botao shadow-none'>
                    <i class="bi bi-qr-code-scan"></i><br> LER QRCODE
                </button>
            </div>
        </div>

        <div class="box-formulario">
            <form action="/6" class='needs-validation' novalidate>
                <div class='logo-img'>
                    <img class='logo' src="{{asset('img/logo.svg')}}" alt="">
                </div>

                <div class="login-mesa col-9">
                    <label for="mesa">Mesa</label>
                    <input type="text" class='form-control' required>
                </div>


                <div class="invalid-feedback">
                    Digite a mesa
                </div>

                <div class='botao'>
                    <button type='submit' class='btn btn-primary'>Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='js/login-cliente.js'></script>
</body>

</html>