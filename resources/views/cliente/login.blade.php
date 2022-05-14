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
@if (Auth::user())
        
         alou
         @else
         nau
         @endif
    <div class="container">
        <div class="box-scan">
            <div class="scan">
                <button class='botao shadow-none'>
                    <i class="bi bi-qr-code-scan"></i><br> LER QRCODE
                </button>
            </div>
        </div>

        <div class="box-formulario">
            <form  action="/login" method="post">
                @csrf
                <!-- TEXT -->

                <div class='title'>
                    <img class='logo ' src="{{asset('img/logo.svg')}}" alt="">
                </div>

                <div class="login col-9">
                    <label for="email">Email</label>
                    <input type="email" name='email' class="email form-control" required>
                </div>

<<<<<<< HEAD
                <div class='form-group col-10 d-flex flex-column align-items-center w-100'>
                    <form action="/login" method="post">
                    @csrf
                    <div class='form-group'>
                        <label class="label-input-form" for="">Usuario</label>
                        <input class='form-control' type="email" name="email" id="" required>
                    </div>

                    <div class='form-group'>
                        <label class="label-input-form col-4" for="">Senha</label>
                        <input class='form-control' type="password" name="password" id="" required>
                    </div>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button type="submit"class='btn-primary btn' style='width:65%;'>Entrar</button>
                </div>
            </form>
                <div class="nv-cadastro">
                    <label>Novo aqui? <a href="/cliente">Crie uma conta</a></label>
=======
                <div class="passwd col-9">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class='form-control' required>
                </div>

                <div class="line">
                    <p class=''>OU</p>
                </div>

                <div class="login-mesa col-9">
                    <label for="mesa">Mesa</label>
                    <input type="text" class='form-control' required>
                </div>


                <div class="invalid-feedback">
                    Faça o login ou Digite a mesa
                </div>

                <div>
                    <button type='submit' class='btn btn-primary'>Confirmar</button>
>>>>>>> ec705ea1a74dd4e66484dbd04c477a187a7aa50c
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='js/login-cliente.js'></script>
</body>

</html>