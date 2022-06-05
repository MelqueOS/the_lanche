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
       <form action="{{route('cadastro')}}" method="POST" enctype="multipart/form-data" name='form-cad'>
        @csrf

        <fieldset class="">
            <label for="">Nome Fantasia</label>
            <input class='form-control' type="text" name="nome" value = "{{$user->name}}" required />
            <label for="">CNPJ</label>
            <input class='form-control' type="text" name="cnpj" maxlength='14' value = "{{$empresa->cnpj}}" class='cnpj' required />
            <label for="">Email</label>
            <input class='form-control' type="email" name="email" value = "{{$user->email}}" required />
            <label for="">Razão social</label>
            <input class='form-control' type="text" name="razsocial" maxlength='14' value = "{{$empresa->razao_social}}" class='cnpj' required />
            <label for="">Senha</label>
            <input class='form-control' type="password" name="senha" required />
            <label for="">Confirmar Senha</label>
            <input class='form-control' type="password" name="csenha" required />
        </fieldset>

        <fieldset class="">
            <label for="">Telefone</label>
            <input type="text" name="telefone" class='phone form-control' maxlength='15'value = "{{$empresa->telefone}}"  required>
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
            <input class='form-control' type="text" name="logradouro" value = "{{$endereco->logradouro}}"  required>
            <label for="">Numero</label>
            <input class='form-control' type="text" name="numero" value = "{{$endereco->numero}}" required>
            <label for="">bairro</label>
            <input class='form-control' type="text" name="bairro" value = "{{$endereco->bairro}}" required>
            <input type="submit" name="submit" class="submit action-button btn-primary" value="Finalizar" />
        </fieldset>
        <input type="hidden" name="id" value="{{$user->id}}">
        <label class='nv-cadastro'>Já possui uma conta? <a href="/login">Entre agora</a></label>
    </form>
    
    <a href="/empresa/1"> Teste visualizacao de perfil (remover o botão)</a>
    </div>

    
</body>

</html>