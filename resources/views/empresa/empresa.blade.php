<html>
    <head>
        <title>{{$titulo}} {{$user->name}}</title>
    </head>
    <body>
        <h2>Pagina Temporaria para apresentar os dados do usuario e as funções que ele vai exercer
            Favor desenvolver o layout original separado e depois inserir nessa pagina
        </h2>
        <ul>
            
            <li>
                Logado como:{{$user->name}}, {{$acess}}
            </li>
            <li>No sistema desde:{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</li>
            <li>Endereco atual: {{$tipo[$endereco->tipo_logradouro]}} {{$endereco->logradouro}}, n {{$endereco->numero}}, bairro {{$endereco->bairro}}</li>
            <p>Contatos </p>
            <li>Email: {{$user->email}}</li>
            <li>Telefone: {{$empresa->telefone}}</li>
            <p>Registro de atualizações<p>
            <li>Ultima modificação de dados de acesso: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($user->updated_at)->format('H:m')}}</li>
            <li>Ultima modificação de dados de contato: {{ \Carbon\Carbon::parse($empresa->updated_at)->format('d/m/Y')}}</li>
            <li>Ultima atualização de endereço:{{ \Carbon\Carbon::parse($endereco->updated_at)->format('d/m/Y')}} </li>
            <li>
                <a href = "/produtos">Gerenciar cardapio</a>
            </li>
            <li>
                <a href = "/pedidos">Gerenciar Pedidos</a>
            </li>
            
            <li>
                <a href = "/mesa">Adicionar Mesa</a>
            </li>
            <li>
                <a href = "/empresa/{{$user->id}}/edit">Alterar dados</a>
            </li>
            <li>
               <a href=""> Sair</a>
            </li>
            <li>
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
            </li>
        <ul>
    </body>
</html>