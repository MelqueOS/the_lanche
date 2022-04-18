<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nome da empresa aqui -->
    <title>Cardapio da Empresa X</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">
</head>

<body>
    <!-- NAVBAR -->
    <div class="navbar navbar-expand-lg col-12">
        <div class="cont-form ">
            <form action="" method="get" class='form-group'>
                <input type="text" name='search-item' class='form-control search-item' placeholder='Buscar um Item' />
            </form>
        </div>
    </div>

    <!-- AQUI VAI TER UM FOREACH >> AQUI VAI SER O TIPO(COMBO, COMIDA, BEBIDA, ETC)-->
    <div class="tipo">
        <!-- descricao do tipo -->
        <div class='title'>
            <h1>Combos</h1>
        </div>

        <div class="conteudo">

            <!-- ITEM 1 -->
            <div class="item" id='item'>
                <!-- AQUI VAI TER UM FOREACH >> MOSTRA TODOS OS ITENS DO TIPO -->
                <div class="box-item">
                    <div class='box-img'>
                        <!-- MOSTRA A FOTO DO ITEM -->
                        <img src="{{asset('img/logo.svg')}}" alt="">
                    </div>

                    <div class="sub-box">
                        <div class="sub-title">
                            <!-- nome_descritivo -->
                            <h2>Prato do Mar</h2>
                        </div>
                        <div class='descricao'>
                            <!-- descricao -->
                            <p>Prato "viagem ao fundo do mar" poderia ser descrita como "polvo cozido, lula Prato "viagem ao fundo do mar" poderia em ser descrita como "polvo cozido, lula em anéis e camarões refogados servidos com anéis e camarões refogados servidos com caldo de peixe especial do chefe".</p>
                        </div>

                        <hr>

                        <div class='valor'>
                            <!-- valor do item -->
                            <p><strong>Valor: </strong>R$25,00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="item">
                <!-- AQUI VAI TER UM FOREACH >> MOSTRA TODOS OS ITENS DO TIPO -->
                <div class="box-item">
                    <div class='box-img'>
                        <!-- MOSTRA A FOTO DO ITEM -->
                        <img src="{{asset('img/logo.svg')}}" alt="">
                    </div>

                    <div class="sub-box">
                        <div class="sub-title">
                            <!-- nome_descritivo -->
                            <h2>Prato do Mar</h2>
                        </div>
                        <div class='descricao'>
                            <!-- descricao -->
                            <p>Prato "viagem ao fundo do mar" poderia ser descrita como "polvo cozido, lula Prato "viagem ao fundo do mar" poderia em ser descrita como "polvo cozido, lula em anéis e camarões refogados servidos com anéis e camarões refogados servidos com caldo de peixe especial do chefe".</p>
                        </div>

                        <hr>

                        <div class='valor'>
                            <!-- valor do item -->
                            <p><strong>Valor: </strong>R$25,00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="item">
                <!-- AQUI VAI TER UM FOREACH >> MOSTRA TODOS OS ITENS DO TIPO -->
                <div class="box-item">
                    <div class='box-img'>
                        <!-- MOSTRA A FOTO DO ITEM -->
                        <img src="{{asset('img/logo.svg')}}" alt="">
                    </div>

                    <div class="sub-box">
                        <div class="sub-title">
                            <!-- nome_descritivo -->
                            <h2>Prato do Mar</h2>
                        </div>
                        <div class='descricao'>
                            <!-- descricao -->
                            <p>Prato "viagem ao fundo do mar" poderia ser descrita como "polvo cozido, lula Prato "viagem ao fundo do mar" poderia em ser descrita como "polvo cozido, lula em anéis e camarões refogados servidos com anéis e camarões refogados servidos com caldo de peixe especial do chefe".</p>
                        </div>

                        <hr>

                        <div class='valor'>
                            <!-- valor do item -->
                            <p><strong>Valor: </strong>R$25,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- DESCONSIDERAR! DAQUI PARA BAIXO É SOMENTE PARA EXEMPLIFICAR MESMO -->
    <div class="tipo">
        <div class="item">
            <!-- descricao do tipo -->
            <div class='title'>
                <h1>Pastel</h1>
            </div>
            <!-- AQUI VAI TER UM FOREACH >> MOSTRA TODOS OS ITENS DO TIPO -->
            <div class="box-item">
                <div class='box-img'>
                    <!-- MOSTRA A FOTO DO ITEM -->
                    <img src="{{asset('img/logo.svg')}}" alt="">
                </div>
                <div class="sub-box">
                    <div class="sub-title">
                        <!-- nome_descritivo -->
                        <h2>Pastel de Queijo</h2>
                    </div>
                    <div class='descricao'>
                        <!-- descricao -->
                        <p>alimento composto por uma massa à base de farinha a que se dá a forma de um envelope, se recheia e depois se frita por imersão em óleo fervente.</p>
                    </div>
                    <hr>
                    <div class='valor'>
                        <!-- valor do item -->
                        <p><strong>Valor: </strong>R$25,00</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script type='text/javascript' src='js/function.js'></script>
</body>

</html>