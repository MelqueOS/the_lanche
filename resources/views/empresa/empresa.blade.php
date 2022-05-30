<html>
<head>
    <title>{{$titulo}} {{$user->name}}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel='stylesheet' href="{{asset('css/padroes.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nav.css')}}" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navedit ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Thelanche</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/produto">Gerenciar cardapio</a>
                    {{-- Sera adicionado no futuro
                    <a class="nav-link" href="/pedido">Gerenciar Pedidos</a>
                    <a class="nav-link" href="/mesa">Adicionar Mesa</a>
                    --}}
                    <a class="nav-link" href="/sair">Sair</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-column align-items-center h-75 w-100">
        <p class="h4 m-2">Bem vindo: {{$user->name}}, {{$acess}}!</p>
        <table class="table w-75 m-5">
            <thead>
                <colgroup>
                    <col width="10">
                    <col width="100">
                    <col width="200">
                    <col width="200">
                    <col width="200">
                    <col width="250">
                    <col width="250">
                </colgroup>
                <tr>
                    <th scope="col">Data de ingresso no sistema </th>
                    <th scope="col">Endereco cadastrado </th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ultima alteração dos dados de acesso</th>
                    <th scope="col">Ultima alteração dos dados de contato</th>
                    <th scope="col">Ultima atualização de endereço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                    <td>{{$tipo[$endereco->tipo_logradouro]}} {{$endereco->logradouro}}, n {{$endereco->numero}}, bairro {{$endereco->bairro}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$empresa->telefone}}</td>
                    

                    <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($user->updated_at)->format('H:m')}}</td>
                    <td>{{ \Carbon\Carbon::parse($empresa->updated_at)->format('d/m/Y')}}</td>
                    <td>{{ \Carbon\Carbon::parse($endereco->updated_at)->format('d/m/Y')}} </td>
                    <td>  
                        <div class="d-flex">
                            {{-- Por enquanto a empresa não pode excluir a conta
                            
                            <form action="" method="POST" name="delete">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type='submit' class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                            --}}
                            <a href = "/empresa/{{$user->id}}/edit"><button type='button' class="btn btn-info"><i class="bi bi-pencil-square"></i></button></a>
                        </div>
                    </td>    
                </tr>
            </tbody>
        </table>
    </div>
            {{-- Codigo para exclusão dos dados da empresa
                <form method = "POST" action = "/empresa/{{$user->id}}">
                @csrf
                <input type = "hidden" name = "_method" value = "DELETE"/> 
	
                @if($confirmed == true)
                    <p>Uma solicitação de excluzão da sua conta foi recebida, tem certeza que deseja exclui-la?<p>
    				<input type = "hidden" name = "confirmed" value = "{{True}}"/> 
                    <input type = "submit" id = "excluirBotao" name="confirmed" class="btn btn-danger" value = "Cancelar"/>
                @else
                    <input type = "hidden" name = "confirmed" value = "{{False}}"/> 
                @endif
                   <input type = "submit" id = "excluirBotao" class="btn btn-danger" value = "Excluir conta"/>
            </form>
            --}}
    </body>
</html>