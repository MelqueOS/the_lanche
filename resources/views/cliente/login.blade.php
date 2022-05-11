<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />

    <link rel='stylesheet' href="{{asset('css/padroes.css')}}"/>

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
            <form action="" class='needs-validation' novalidate>
                <div class='title'>
                    <img class='logo ' src="{{asset('img/logo.svg')}}" alt="">
                    <div class="entrada col-8 d-flex flex-column">
                        <label class="label-input-form" for="codMesa">número da mesa</label>
                        <input class='form-control input-center' maxlength='3' type="text" name="codMesa" id="codMesa" required>

                        <button type='submit' class='col-4 btn btn-primary '>Confirmar</button>

                        <div class="invalid-feedback">
                            <!-- fazer um if para garantir que a mesa exista no bd -->
                            <p>Digite o numero da mesa</p>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='js/login-cliente.js'></script>
</body>

</html>