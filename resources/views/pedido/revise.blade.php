<html>
    <head>
        <title>Revise o pedido</title>
    </head>
    <body>
        <p>Em teste<p>
        @foreach($itens_pedido as $item)
            @foreach($produtos as $produto)
                @if($item == $produto->id)
                    {{$produto->nome_descritivo}}
                    Quantidade:
                @endif
            @endforeach
        @endforeach
        Forma de pagamento:
            Cartão
            Dinheiro
                Troco?
    </body>
</html>