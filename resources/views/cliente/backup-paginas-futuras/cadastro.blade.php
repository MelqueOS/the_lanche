<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}" />
</head>

<body>
    <div class="resp"></div>
        <form action="/cliente" method="POST" id="msform" name='formulario'>
            @csrf
            <ul id="progressbar">
                <li class="active">Cadastro</li>
                <li>Contato</li>
                <li>Endereço</li>
            </ul>
            <fieldset class="">
                <label for="">Nome</label>
                <input type="text" name="nome" class='form-control'  value="{{$user->name}}"required>
                
                <label for="">Email</label>
                <input type="email" name="email" class='form-control'  value="{{$user->email}}"required>
                
                <label for="">Data de Nascimento</label>
                <input type="date" name="datanascimento" class='form-control'  value="{{$cliente->data_nascimento}}"required>
                
                <label for="">Senha</label>
                <input type="password" name="senha" class='form-control'  value="{{$user->password}}"required>
                
                <label for="">Confirmar Senha</label>
                <input type="password" class='form-control'  name = "csenha"value="{{$user->password}}"required>

                <button type="button" name="next1" class="next action-button btn-primary">Proximo</button>
                <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
            </fieldset>

            <fieldset class="">
                <label for="">Telefone</label>
                <input type="text" class='form-control phone' name="telefone" maxlength='15' value="{{$cliente->telefone}}"required> 
                
                <label for="">WhatsApp</label>    
                <input type="text" name="whatsapp" class='form-control phone' maxlength='15' value="{{$cliente->whatsapp}}"required>

                <button type="button" name="previous" class="prev action-button btn-second">Anterior</button>
                <button type="button" name="next2" class="next action-button btn-primary">Proximo</button>
                <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
            </fieldset>

            <fieldset class="">
                <label for="">Tipo de Logradouro</label>
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

            <label for="">Logradouro</label>
            <input class='form-control' type="text" name="logradouro" required>
            <label for="">bairro</label>
            <input type="text" name="bairro" class='form-control' value="{{$endereco->bairro}}"required>
            <label for="">numero</label>
            <input type="number" name="numero" class='form-control' value="{{$endereco->numero}}"required>
            <label for="">referencia</label>
            <input type="text" name="referencia" class='form-control' value="{{$endereco->referencia}}">
            <label for="">complemento</label>
            <input type="text" name="complemento" class='form-control' value="{{$endereco->complemento}}">
            
            <input type="hidden" name="id" value="{{$user->id}}">
            <button type="button" name="previous" class="prev action-button btn-second">Anterior</button>
            <button type="submit" name="next" class="submit action-button btn-primary">Finalizar</button>
            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </form>
        </div>
        <a href="/cliente/8"> Teste visualizacao de perfil (remover o botão)</a>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/default.js'></script>
    <script type='text/javascript' src='js/cadastro-cliente.js'></script>

    <!-- JQ MASK -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>
</body>

</html>