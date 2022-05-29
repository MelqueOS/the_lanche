<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}} {{$user->name}}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel='stylesheet' href="{{asset('css/padroes.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cliente.css')}}" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container">
        <nav class='navbar navbar-dark navedit navbar-expand-lg'>

            <li>
                <img src="img/logo.svg" alt="">
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">{{$user->name}}</a></li>
                    <li><a class="dropdown-item" href="#">Logado em: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </li>
        </nav>

        <div class="content">
            <h1>Endereço</h1>
            <p>{{$tipo[$endereco->tipo_logradouro]}} {{$endereco->logradouro}}, n {{$endereco->numero}}, {{$endereco->complemento}}, bairro {{$endereco->bairro}}, localiza-se perto de {{$endereco->referencia}}
            </p>

            <div class="cont">
                <h1>Contatos </h1>
                <div class="input-group w-50">
                    <span class='input-group-text'>
                        <i class="bi bi-at"></i>
                    </span>
                    <input class="form-control" type="text" value="{{$user->email}}" aria-label="{{$user->email}}" readonly />
                </div>

                <div class="input-group w-50">
                    <span class='input-group-text'>
                        <i class="bi bi-telephone"></i>
                    </span>
                    <input class="form-control" type="text" value="{{$cliente->telefone}}" aria-label="{{$cliente->telefone}}" readonly />
                </div>

                <div class="input-group w-50">
                    <span class='input-group-text'>
                        <i class="bi bi-whatsapp"></i>
                    </span>
                    <input class="form-control" type="text" value="{{$cliente->whatsapp}}" aria-label="{{$cliente->whatsapp}}" readonly />
                </div>

            </div>

            <div class="registro">

                <h1>Registro de atualizações</h1>
                <p><strong>Ultima modificação de dados de acesso:</strong> {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($user->updated_at)->format('H:m')}}</p>

                <p>Ultima modificação de dados de contato: {{ \Carbon\Carbon::parse($cliente->updated_at)->format('d/m/Y')}}</p>

                <p>Ultima atualização de endereço:{{ \Carbon\Carbon::parse($endereco->updated_at)->format('d/m/Y')}} </p>

                <p><a href="/pedido">Realizar pedido</a></p>
                <p><a href="/mesa">Reservar mesa</a></p>
                <p><a href="/cliente/{{$user->id}}/edit">Alterar dados</a></p>
                <p><a href=""> Sair</a></p>
            </div>


            <form method="POST" action="/cliente/{{$user->id}}">
                @csrf
                <input type="hidden" name="_method" value="DELETE" />
                @if(isset($confirmed) && $confirmed == true)
                <p>Uma solicitação de excluzão da sua conta foi recebida, tem certeza que deseja exclui-la?
                </p>
                <input type="hidden" name="confirmed" value="{{True}}" />
                <input type="submit" id="excluirBotao" name="confirmed" class="btn btn-danger" value="Cancelar" />
                @else
                <input type="hidden" name="confirmed" value="{{False}}" />
                @endif
                <input type="submit" id="excluirBotao" class="btn btn-danger" value="Excluir conta" />
            </form>
        </div>
    </div>
</body>

</html>