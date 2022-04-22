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
        @csrf
        <ul id="progressbar">
            <li class="active">Cadastro</li>
            <li>Contato</li>
            <li>Endereço</li>
        </ul>

        <fieldset class="">

            <label class='form-control' for="">Nome</label>
            <input class='form-control' type="text" name="nome" required />

            <label class='form-control' for="">Email</label>
            <input class='form-control' type="email" name="email" required />

            <label class='form-control' for="">Data de Nascimento</label>
            <input class='form-control' type="date" name="datanascimento" required min='1900-01-01' />

            <label class='form-control' for="">Senha</label>
            <input class='form-control' type="password" name="pass" required />
            
            <label class='form-control' for="">Confirmar Senha</label>
            <input class='form-control' type="password" name="csenha" required />

            <button type="button" name="next1" class="next action-button btn-primary">Proximo</button>

            <label class='form-control' class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label class='form-control' for="">Telefone</label>
            <input class='form-control' type="text" name="telefone" class='phone' maxlength='15' required>
            <label class='form-control' for="">WhatsApp</label>
            <input class='form-control' type="text" name="whatsapp" class='phone' maxlength='15' required>
            <button type="button" name="previous" class="prev action-button btn-second">Anterior</button>
            <button type="button" name="next2" class="next action-button btn-primary">Proximo</button>

            <label class='form-control' class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label class='form-control' for="">Tipo Logradouro</label>
            <select name="tipologadouro" class="inptselect" required>
                <option value="1" selected="selected">Avenida</option>
                <option value="2">Rua</option>
                <option value="3">Fazenda</option>
                <option value="4">Rodovia</option>
                <option value="5">Condominio</option>
            </select>

            <label class='form-control' for="">bairro</label>
            <input class='form-control' type="text" name="logradouro" required>
            <label class='form-control' for="">numero</label>
            <input class='form-control' type="number" name="numero" required>
            <label class='form-control' for="">referencia</label>
            <input class='form-control' type="text" name="referencia">
            <label class='form-control' for="">complemento</label>
            <input type="text" name="complemento">
            <input type="button" name="previous" class="prev action-button btn-second" value="Anterior" />
            <button type="submit" class="submit action-button btn-primary">Finalizar</button>

            <label class='form-control' class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>

        </fieldset>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/function.js'></script>

    <!-- JQ MASK -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>

</body>

</html>