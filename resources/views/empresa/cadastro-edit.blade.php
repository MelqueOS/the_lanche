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

    <form action="/cliente" method="POST" id="msform" enctype="multipart/form-data" name='form-cad'>    
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
            <input class='form-control' type="text" name="cnpj" maxlength='14' class='cnpj' required />
            <label for="">Email</label>
            <input class='form-control' type="email" name="email" required />
            <label for="">Senha</label>
            <input class='form-control' type="password" name="pass" required />
            <label for="">Confirmar Senha</label>
            <input class='form-control' type="password" name="csenha" required />

            <input type="button" name="next" class="next action-button btn-primary" value="Proximo" />

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>
        </fieldset>

        <fieldset class="">
            <label for="">Telefone</label>
            <input type="text" name="telefone" class='phone form-control' maxlength='15' required>
            <label for="">WhatsApp</label>
            <input type="text" name="whatsapp" class='phone form-control' maxlength='15' required>
            <input type="button" name="previous" class="prev action-button btn-second" value="Anterior" />
            <input type="button" name="next" class="next action-button btn-primary" value="Proximo" />

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

            <input type="button" name="previous" class="prev action-button btn-second" value="Anterior" />
            <button type="submit" name="submit" class="submit action-button btn-primary"  >Finalizar</button>

            <label class='nv-cadastro'>Já possui uma conta? <a href="/">Entre agora</a></label>

        </fieldset>
    </form>
    </div>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript' src='js/function.js'></script>

    <!-- JQ MASK -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>
</body>

</html>