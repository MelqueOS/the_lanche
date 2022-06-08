<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nome da empresa aqui -->
    <title>Exibição do Cardápio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">
</head>

<body class="h-75">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="cont-form ">
            <figure><img src="{{asset('img/logo.svg')}}" alt=""></figure>
            <form action="" method="get" class='form-group'>
                <input type="text" name='search-item' class='form-control search-item' placeholder='Buscar um Item' />
            </form>
        </div>
    </nav>

    <h1 id="titulo">cardápio</h1>
    <!-- AQUI VAI TER UM FOREACH >> AQUI VAI SER O TIPO(COMBO, COMIDA, BEBIDA, ETC)-->
    <form method="POST" action="/pedido">
        @if(count($produtos) == 0)
        <h1 id='unico'>Não há nenhum cardapio disponivel</h1>
        @else

        @csrf

        <div class="listagem">
            @php
            $conferir=[];
            @endphp

            @foreach($produtos as $linha)

            @if(in_array($linha->tipo, $conferir) == true)

            @else
            <div class='item'>
                <div class="tipo d-flex flex-column">
                    <h1>
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @if($linha->tipo == $key_selected)
                        {{$value_selected}}
                        @php 
                            $conferir[]=$linha->tipo
                        @endphp
                        @endif
                        @endforeach
                    </h1>
                </div>
                <div class="listagem">

                    @foreach($produtos as $linha2)
                    @if($linha->tipo==$linha2->tipo)

                    <div class="box-item">
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @if($linha2->tipo == $key_selected)
                        <div class='produto '>
                            @if(file_exists($linha2->url_img))
                            <div class='box-img'>
                                <img src="{{asset($linha2->url_img)}}" id="imgPhoto" alt="" class="imgPhoto">
                            </div>
                            @else
                            <i class="bi bi-file-image-fill " style="font-size:50px"></i>
                            @endif

                            <div class="sub-box">
                                <div class="sub-title">
                                    <!-- nome_descritivo -->
                                    <h2>{{$linha->nome_descritivo}}</h2>
                                </div>
                                <div class='descricao'>
                                    <!-- descricao -->
                                    <p>{{$linha->descricao}}.</p>
                                </div>

                                <div class='valor'>
                                    <!-- valor do item -->
                                    <span><strong>Valor: </strong>R${{number_format($linha->valor, 2, ',', '.')}}</span>
                                </div>
                            </div>

                        </div>
                        @endif
                        @endforeach
                    </div>

                    @endif

                    @endforeach

                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endif
        <input type="hidden" name="revise" value="false">
        <input type="hidden" name="usr_token" value="">
        <input type="hidden" name="tokid" value="">
        <!--
        Não aceitando envio de pedidos
    -->
        {{-- Botão removido, adicionar funcionalidade de revisão de pedido futuramente
    <div class="fab "  ontouchstart="">
        <input type ="submit"class="btn btn-success p-2" value="Pedir"/>
    </div>
    --}}
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/cardapio.js'></script>
</body>

</html>