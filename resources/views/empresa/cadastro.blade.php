<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}" />
</head>

<body class="d-flex flex-column  ">
<h1 class="text-center fw-bold text-uppercase p-5 m-5">{{$titulo}}</h1>
    <form action="{{route('cadastro')}}" method="POST" class="d-flex flex-row h-50 pb-5 align-items-center   justify-content-center " enctype="multipart/form-data" name='form-cad'>
        @csrf
        
        <div class="w-50 h-50 align-items-center d-flex flex-column justify-content-between ">
            <fieldset class="col-8   h-100  d-flex flex-column justify-content-around">
                <label for="">Nome Fantasia<input class='form-control' type="text" name="nome" value="{{$user->name}}" required /></label>
                <label for="">CNPJ<input class='form-control' type="text" name="cnpj" maxlength='14' value="{{$empresa->cnpj}}" class='cnpj' required /></label>
                <label for="">Email<input class='form-control' type="email" name="email" value="{{$user->email}}" required /></label>
                <label for="">Razão social <input class='form-control' type="text" name="razsocial" maxlength='14' value="{{$empresa->razao_social}}" class='cnpj' required /></label>
                <label for="">Senha<input class='form-control' type="password" name="senha" required /></label>
                <label for="">Confirmar Senha <input class='form-control' type="password" name="csenha" required /></label>

            </fieldset>
        </div>
        <div class="d-flex flex-column w-50 h-50 align-items-center">
            <fieldset class="col-8  h-100  d-flex flex-column justify-content-around">
                <label for="">Telefone<input type="text" name="telefone" class='phone form-control' maxlength='15' value="{{$empresa->telefone}}" required></label>
                <label for="">Tipo de Logradouro  
                    <select name="tipologadouro" class="form-control" required>
                    @php
                    $ok = false;
                    @endphp
                    <option value="" selected="selected">Selecione o tipo de logradouro
                    <option>
                        @foreach($parametro_select as $key_selected => $value_selected)
                        @foreach($locais as $local)
                        @if($local->tipo_logradouro == $key_selected)
                    <option value="{{$key_selected}}" selected="selected">{{$value_selected}}</option>
                    @php
                    $ok = true;
                    @endphp
                    @break
                    @endif
                    @endforeach
                    @if(!$ok)
                    <option value="{{$key_selected}}">{{$value_selected}}</option>
                    @endif
                    @php
                    $ok = false;
                    @endphp

                    @endforeach
                </select></label>
                <label for="">Logradouro<input class='form-control' type="text" name="logradouro" value="{{$endereco->logradouro}}" required></label>
                <label for="">Numero<input class='form-control' type="text" name="numero" value="{{$endereco->numero}}" required></label>
                <label for="">bairro<input class='form-control' type="text" name="bairro" value="{{$endereco->bairro}}" required></label>
              
                </br>
                <input type="submit" name="submit" class="btn-primary w-100 h-100" value="Alterar"  />
            </fieldset>
        </div>

        <input type="hidden" name="id" value="{{$user->id}}">
        <!--  <label class='nv-cadastro'>Já possui uma conta? <a href="/login">Entre agora</a></label>-->
    </form>

    </div>


</body>

</html>