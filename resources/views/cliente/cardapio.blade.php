<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio da Empresa X</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">
</head>

<body>
    <div class="navbar navbar-expand-lg col-12">
        <div class="cont-form ">
            <form action="" method="get" class='form-group'>
                <input type="text" name='search-item' class='form-control search-item' placeholder='Buscar um Item' />
            </form>
        </div>
    </div>

    <div class="itens">
        <div class='title'>
            <h1>Combos</h1>
        </div>

        <div class="box-item">
            <div class='box-img'>
                <img src="{{asset('img/logo.svg')}}" alt="">
            </div>

            <div class="sub-box">
                <div class="sub-title">
                    <h2>Prato do Mar</h2>
                </div>
                <div class='descricao'>
                    <p>Prato "viagem ao fundo do mar" poderia ser descrita como "polvo cozido, lula Prato "viagem ao fundo do mar" poderia em ser descrita como "polvo cozido, lula em anéis e camarões refogados servidos com anéis e camarões refogados servidos com caldo de peixe especial do chefe".</p>
                </div>
            </div>
        </div>

        <hr>

    </div>

    <div class="itens">
        <div class='title'>
            <h1>Combos</h1>
        </div>

        <div class="box-item">
            <div class='box-img'>
                <img src="{{asset('img/logo.svg')}}" alt="">
            </div>

            <div class="sub-box">
                <div class="sub-title">
                    <h2>Frutos do mar</h2>
                </div>
                <div class='descricao'>
                    <p>Prato "viagem ao fundo do mar" poderia ser descrita como "polvo cozido, lula Prato "viagem ao fundo do mar" poderia em ser descrita como "polvo cozido, lula em anéis e camarões refogados servidos com anéis e camarões refogados servidos com caldo de peixe especial do chefe".</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>