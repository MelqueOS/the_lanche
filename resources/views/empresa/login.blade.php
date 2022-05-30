
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
        <div class="box-formulario">
            <form action="/adm" class='needs-validation' method= 'POST' novalidate>
                @csrf
                <div class='logo'>
                    <img class='logo ' src="{{asset('img/logo.svg')}}" alt="">
                </div>

                <div class="login col-9">
                    <label for="email">Email</label>
                    <input type="email" name='email' class="email form-control" required>
                </div>

                <div class="passwd col-9">
                    <label for="senha">Senha</label>
                    <input type="password" name="password" class='form-control' required>
                </div>
                <div>
                    <button type='submit' class='btn btn-primary'>Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>