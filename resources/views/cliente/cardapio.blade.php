<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nome da empresa aqui -->
<<<<<<< HEAD
    <title>Cardapio da Empresa X</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
  <link rel="stylesheet" href="{{asset('css/cadastro.css')}}" />
=======
    <title>Cardapio</title>

>>>>>>> ec705ea1a74dd4e66484dbd04c477a187a7aa50c
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
    <form method ="POST" action="/pedido">
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
            
            <!-- ITEM 1 -->

            <div class="item" id='item'>
                <!-- AQUI VAI TER UM FOREACH >> MOSTRA TODOS OS ITENS DO TIPO -->
                <div class="box-item">
                <input type="checkbox" name="item_pedido[]" value="{{$produto_linha->id}}"> 
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
                            <p><strong>Valor: </strong>R${{$produto_linha->valor}}</p>
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
    <div class="fab"  ontouchstart="">
        <input type = "submit" value="Pedir"/>
    </div>
    <div class="item2 ">
    <div class="col-4">
      <button type="button" class="btn btn-second bottom "><i class="fas fa-save"></i>Cancelar</button>
    </div>
    <div class="col-4">
      <button type="submit" class="btn btn-primary bottom"><i class="fas fa-save"></i>Salvar</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/cardapio.js'></script>
</body>

</html>