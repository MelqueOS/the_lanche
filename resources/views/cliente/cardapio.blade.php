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
    <link rel="stylesheet" href="{{asset('css/painel_gerenciamento.css')}}" />
</head>

<body class="h-75">
    <!-- NAVBAR -->
    <div class="navbar navbar-expand-lg col-12">
        <div class="cont-form ">
            <form action="" method="get" class='form-group'>
                <input type="text" name='search-item' class='form-control search-item' placeholder='Buscar um Item' />
            </form>
        </div>
    </div>

    <!-- AQUI VAI TER UM FOREACH >> AQUI VAI SER O TIPO(COMBO, COMIDA, BEBIDA, ETC)-->
    <form method="POST" action="/pedido">
        @if(count($produtos) == 0)
        <p>Não há nenhum cardapio disponivel
        <p>
            @else

            @csrf
          
        <div class="listagem">
            @php
            $conferir=[];
            @endphp

            @foreach($produtos as $linha)

            @if(in_array($linha->tipo, $conferir) == true)

            @else
            <hr>
            <div class='item'>
                <div class="tipo d-flex flex-column">
                    <h1>
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @if($linha->tipo == $key_selected)
                        {{$value_selected}}
                        {{$conferir[]=$linha->tipo}}
                        @endif
                        @endforeach
                    </h1>
                </div>
                <div class="d-flex flex-row flex-wrap aqui">

                    @foreach($produtos as $linha2)
                    @if($linha->tipo==$linha2->tipo)

                    <div class="cont me-5 mb-5 shadow">
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @if($linha2->tipo == $key_selected)
                        <div class="conteudo">
                            <div class='produto '>
                                <div class="img ">
                                    <input type="checkbox" name="item_pedido[]" value="{{$linha->id}}">

                                    @if(asset($linha2->url_img))
                                    <div class='box-img'>
                                        <img src="{{asset($linha2->url_img)}}" id="imgPhoto" alt="" class="imgPhoto">
                                    </div>
                                    @else
                                    <i class="bi bi-file-image-fill " style="font-size:50px"></i>
                                    @endif
                                </div>
                               
                        <div class="sub-box">
                            <div class="sub-title">
                                <!-- nome_descritivo -->
                                <h2>{{$linha->nome_descritivo}}</h2>
                            </div>
                            <div class='descricao'>
                                <!-- descricao -->
                                <p>{{$linha->descricao}}.</p>
                            </div>

                            <hr>

                            <div class='valor'>
                                <!-- valor do item -->
                                <p><strong>Valor: </strong>R${{$linha->valor}}</p>
                            </div>
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