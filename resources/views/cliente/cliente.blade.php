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
                Logado como:{{$user->name}}, {{$idade}}, {{$acess}}
            </li>
            <li>No sistema desde:{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</li>
            <li>Endereco atual: {{$tipo[$endereco->tipo_logradouro]}} {{$endereco->logradouro}}, n {{$endereco->numero}}, {{$endereco->complemento}}, bairro {{$endereco->bairro}}, localiza-se perto de {{$endereco->referencia}}</li>
            <p>Contatos </p>
            <li>Email: {{$user->email}}</li>
            <li>Telefone: {{$cliente->telefone}}</li>
            <li>whatsapp: {{$cliente->whatsapp}}</li>
            <p>Registro de atualizações<p>
            <li>Ultima modificação de dados de acesso: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($user->updated_at)->format('H:m')}}</li>
            <li>Ultima modificação de dados de contato: {{ \Carbon\Carbon::parse($cliente->updated_at)->format('d/m/Y')}}</li>
            <li>Ultima atualização de endereço:{{ \Carbon\Carbon::parse($endereco->updated_at)->format('d/m/Y')}} </li>
            <li>
                <a href = "/pedido">Realizar pedido</a>
            </li>
            <li>
                <a href = "/mesa">Reservar mesa</a>
            </li>
            <li>

            <a href = "/cliente/{{$user->id}}/edit">Alterar dados</a>

            </li>
            <li>
               <a href=""> Sair</a>
            </li>
            <li>
            <form method = "POST" action = "/cliente/{{$user->id}}">
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