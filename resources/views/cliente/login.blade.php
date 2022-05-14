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
                    <p>ENTRAR</p>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button style='width:65%;' class='btn-primary shadown-none'>Entrar com <i class="bi bi-google" style='font-size: 20px;'></i>oogle
                    </button>
                </div>

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
                </div>
            </form>
        </div>
    </div>
</body>

</html>