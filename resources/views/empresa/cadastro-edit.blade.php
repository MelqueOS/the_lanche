<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Empresa</title>

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

            <label for="">Nome Fantasia</label>
            <input class='form-control' type="text" name="razsocial" required />
            <label for="">CNPJ</label>
            <input class='form-control cnpj' type="text" name="cnpj" maxlength='14' required />
            <label for="">Email</label>
            <input class='form-control' type="email" name="email" required />
            <label for="">Senha</label>
            <input class='form-control' type="password" name="pass" required />
            <label for="">Confirmar Senha</label>
            <input class='form-control' type="password" name="csenha" required />

            <button type="button" name="next1" class="next action-button btn-primary">Proximo</button>

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label for="">Telefone</label>
            <input type="text" name="telefone" class='phone form-control' maxlength='15' required>
            <label for="">WhatsApp</label>
            <input type="text" name="whatsapp" class='phone form-control' maxlength='15' required>
            <button type="button" name="previous" class="prev action-button btn-second">Anterior</button>
            <button type="button" name="next2" class="next action-button btn-primary">Proximo</button>


            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label for="">Tipo Logradouro</label>
            <select name="tipologadouro" required>
                <option value="1" selected>Avenida</option>
                <option value="2">Rua</option>
                <option value="3">Fazenda</option>
                <option value="4">Rodovia</option>
                <option value="5">Condominio</option>
            </select>

            <label for="">bairro</label>
            <input class='form-control' type="text" name="logradouro" required>

            <button type="button" name="previous" class="prev action-button btn-second">Anterior</button>
            <button type="submit" name="submit" class="submit action-button btn-primary"  >Finalizar</button>

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>

        </fieldset>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript' src='js/padroes.js'></script>
    <script type='text/javascript' src='js/cadastro-empresa.js'></script>

    <!-- JQ MASK -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>
</body>

</html>