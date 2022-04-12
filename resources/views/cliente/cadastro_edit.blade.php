<!DOCTYPE html>
<html lang="pt-br">

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

    <form action="/cliente" method="POST" id="msform" enctype="multipart/form-data" name='formulario'>
        <ul id="progressbar">
            <li class="active">Cadastro</li>
            <li>Contato</li>
            <li>Endereço</li>
        </ul>

        <fieldset class="">

            <label for="">Nome</label>
            <input type="text" name="nome" required />
            <label for="">Email</label>
            <input type="email" name="email" required />
            <label for="">Senha</label>
            <input type="password" name="pass" required />
            <label for="">Confirmar Senha</label>
            <input type="password" name="csenha" required />

            <input type="button" name="next1" class="next action-button btn-primary" value="Proximo" />

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label for="">Telefone</label>
            <input type="text" name="telefone" class='phone' maxlength='15' required>
            <label for="">Data de Nascimento</label>
            <input type="date" name="datanascimento" required min='1900-01-01'/>
            <label for="">WhatsApp</label>
            <input type="text" name="whatsapp" class='phone' maxlength='15' required>
            <input type="button" name="previous" class="prev action-button btn-second" value="Anterior" />
            <input type="button" name="next2" class="next action-button btn-primary" value="Proximo" />

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label for="">Tipo Logradouro</label>
            <select name="tipologadouro" class="inptselect" required>
                <option value="1" selected="selected">Avenida</option>
                <option value="2">Rua</option>
                <option value="3">Fazenda</option>
                <option value="4">Rodovia</option>
                <option value="5">Condominio</option>
            </select>

            <label for="">bairro</label>
            <input type="text" name="logradouro" required>
            <label for="">numero</label>
            <input type="number" name="numero" required>
            <label for="">referencia</label>
            <input type="text" name="referencia">
            <label for="">complemento</label>
            <input type="text" name="complemento">
            <input type="button" name="previous" class="prev action-button btn-second" value="Anterior" />
            <input type="submit" name="next" class="submit action-button btn-primary" value="Finalizar" />

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>

        </fieldset>
    </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript' src='js/function.js'></script>

    <!-- JQ MASK -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>

</body>

</html>