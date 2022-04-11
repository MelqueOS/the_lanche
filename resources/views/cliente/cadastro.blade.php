<html>

<head>
    <title></title>
</head>

<body>
    <div class="">
        <div class="">
            <img class='' src="" alt="">
        </div>
        <div class="">
            <form action="/cliente" method="POST">
                @csrf
                <input type="text" name="nome" placeholder="nome" value="{{$user->name}}">
                <input type="email" name="email" placeholder="email" value="{{$user->email}}">
                <input type="password" name="senha" placeholder="senha" value="{{$user->password}}">
                <input type="password" placeholder="confirmarsenha" value="{{$user->password}}">
                <input type="text" name="telefone" placeholder="telefone" value="{{$cliente->telefone}}">
                <input type="date" name="datanascimento" placeholder="datanascimento" value="{{$cliente->data_nascimento}}">
                <input type="text" name="whatsapp" placeholder="whatsapp" value="{{$cliente->whatsapp}}">

                <select name="tipologadouro" class="inptselect" required>
                    <?php $ok = false; ?>
                    <option value="" selected="selected">Selecione o tipo de logradouro
                    <option>
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @foreach($locais as $local)
                        @if($local->tipo_logradouro == $key_selected)
                    <option value="{{$key_selected}}" selected="selected">{{$value_selected}}</option>
                    <?php $ok = true; ?>
                    @break
                    @endif
                    @endforeach
                    <?php if (!$ok) { ?>
                        <option value="{{$key_selected}}">{{$value_selected}}</option>
                    <?php }
                    $ok = false;
                    ?>

                    @endforeach
                </select>
                <input type="text" name="logradouro" placeholder="logradouro" value="{{$endereco->logradouro}}">
                <input type="text" name="bairro" placeholder="bairro" value="{{$endereco->bairro}}">
                <input type="number" name="numero" placeholder="numero" value="{{$endereco->numero}}">
                <input type="text" name="referencia" placeholder="referencia" value="{{$endereco->referencia}}">
                <input type="text" name="complemento" placeholder="complemento" value="{{$endereco->complemento}}">
                <input type="hidden" name="id" value="{{$user->id}}">
                <button type="submit">Enviar</button>
            </form>
            <a href="/cliente/8"> Teste visualizacao de perfil (remover o botão)</a>
        </div>
    </div>
</body>

</html>