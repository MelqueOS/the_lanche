<html>
    <head>
        <title>Revise o pedido</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
        <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
        <link rel="stylesheet" href="{{asset('css/cadastro.css')}}" />
    </head>
    <body>
        
    <div class = "card">
        <div class = "card-header">
            <h1>Vamos concluir o seu pedido<h1>    
        </div>    
        <div class = "card-body">
            <p class = "lead">Para concluirmos indique a quantidade que deseja de cada item escolhido, caso tenha algum que não queira basta clicar em remover do pedido</p>    
            <div class="card-deck">
                @foreach($itens_pedido as $item)
                        @foreach($produtos as $produto)
                            @if($item == $produto->id)
                                <div class="card">
                                    <img class="card-img-top max-width col" src="{{asset($produto->url_img)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$produto->nome_descritivo}}</h5>
                                        <div class="card-text">
                                            <label>Quantidade</label>
                                            <input name = "quantidade" type = "number" min = "1" placeholder = "1"/>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type = "button" value = "Remover"/>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                @endforeach
            </div>    
        </div>
    </div>             
                    
                
        Forma de pagamento:
            Cartão
            Dinheiro
                Troco?
    </body>
</html>