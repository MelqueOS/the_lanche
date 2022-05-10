<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
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
            <form action="">
                <!-- TEXT -->

                <div class='title'>
                    <img class='logo ' src="{{asset('img/logo.svg')}}" alt="">
                    <div class="entrada col-8 d-flex flex-column">
                        <label class="label-input-form" for="codMesa">número da mesa</label>
                        <input class='form-control input-center' type="text" name="codMesa" id="codMesa" required>

                        <div class='error'>
                            <label for="" class='hidden'></label>
                        </div>

                        <div class="invalid-feedback">
                            Esta mesa não está cadastrada
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</body>

</html>