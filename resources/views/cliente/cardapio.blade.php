<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nome da empresa aqui -->
    <title>Exibição do Cardapio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">
</head>

<body class="h-75">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg col-12">
        <div class="content-box">
            <figure>
                <img src="{{asset('img/logo.svg')}}" alt="">
            </figure>
            <form action="" method="get" class='form-group'>
                <input type="text" name='search-item' class='form-control search-item' placeholder='Buscar um Item' />
            </form>
        </div>
    </nav>

    <h1 id='titulo'>Cardápio</h1>

    <!-- AQUI VAI TER UM FOREACH >> AQUI VAI SER O TIPO(COMBO, COMIDA, BEBIDA, ETC)-->
    {{-- So remover esse comentario caso for inserir a função de realizar pedido
        <form method ="POST" action="/pedido">
    --}}
    @if(count($produtos) == 0)
    <h1 id='unico'>Não há nenhum cardapio disponivel</h1>
    <p>
        @else

        @csrf
        @foreach($tipo as $t_key=> $t_value)
    <div class="tipo">
        <!-- descricao do tipo -->
        <div class='title'>
            <h1>{{$t_value}}</h1>
        </div>
        @foreach($produtos as $produto_linha)
        @if($t_key == $produto_linha->tipo)
        <div class="conteudo">

            <!-- ITEM N -->

            <div class="item" id='item'>
                <div class="box-item">
                    <div class='box-img'>
                        <!-- MOSTRA A FOTO DO ITEM -->
                        <img src="{{asset($produto_linha->url_img)}}" alt="">
                    </div>

                    <div class="sub-box">
                        <div class="sub-title">
                            <!-- nome_descritivo -->
                            <h2>{{$produto_linha->nome_descritivo}}</h2>
                        </div>
                        <div class='descricao'>
                            <!-- descricao -->
                            <p>{{$produto_linha->descricao}}.</p>
                        </div>

                        <hr>

                        <div class='valor'>
                            <!-- valor do item -->
                            <p><strong>Valor: </strong>R${{number_format($produto_linha->valor, 2, ',', '.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <hr>
    @endforeach
    @endif
    {{--
        Descomentar caso for inserir o sistema de pedidos
        <input type="hidden" name = "revise" value = "false">
    <input type="hidden" name = "usr_token" value = "{{$usr_token}}">
    <input type="hidden" name="tokid" value="{{$tokid}}">

    --}}
    <!--
        Não aceitando envio de pedidos
    -->
    {{-- Botão removido, adicionar funcionalidade de revisão de pedido futuramente
    <div class="fab "  ontouchstart="">
        <input type ="submit"class="btn btn-success p-2" value="Pedir"/>
    </div>
    --}}
    {{--</form>--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/cardapio.js'></script>
</body>

</html>