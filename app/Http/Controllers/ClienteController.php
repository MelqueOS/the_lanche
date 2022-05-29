<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;
use App\Models\Localizacao;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tip_logradouro = array(
            '1' => 'Avenida',
            '2' => 'Rua',
            '3' => 'Fazenda',
            '4' => 'Rodovia',
            '5' => 'Condominio'
         );
        $titulo = "Cadastro de clientes";
        $cliente = new Cliente();
        $user = new User();
        $locais = Localizacao::All();
        $endereco = new Localizacao();
        //dd($tip_logradouro);
        return view(
            "cliente.cadastro",
            [
                "parametro_select" => $tip_logradouro,
                "user" => $user,
                "cliente" => $cliente,
                "locais" => $locais,
                "endereco" => $endereco,
                "titulo" => $titulo
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titulo = "Cadastro de clientes";
        //dd($request->get('formulario[id]'));
        if ($request->get('id')!=""){
            $user = User::Find($request->get('id'));
            $entidade =  Cliente::Find($request->get('id'));
            $endereco =  Localizacao::Find($request->get('id'));
            $status = "atualizado";			
		}else{
            $user = new User;
			$entidade = new Cliente;
            $endereco = new Localizacao;
			$status = "salvo";
		}
        $user->name = $request->get("nome");
        $user->email = $request->get("email");
        $user->password = $request->get("senha");
        $user->acess = "cliente";
        $user->save();
        $tag_user = $user->id;
        $entidade->user_tag_id = $tag_user;
        $entidade->telefone = $request->get("telefone");
		$entidade->data_nascimento = $request->get("datanascimento");
		$entidade->whatsapp = $request->get("whatsapp");

        $endereco->tipo_logradouro = $request->get("tipologadouro");
		$endereco->logradouro = $request->get("logradouro");
		$endereco->bairro = $request->get("bairro");
		$endereco->numero = $request->get("numero");
		$endereco->referencia = $request->get("referencia");
		$endereco->complemento = $request->get("complemento");
        $endereco->user_tag_id = $tag_user;
        $endereco->save();
        
        $entidade->save();
        //Atualiza o Status
		$request>session()->flash("status", $status);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $confirmed = False)
    {
        
        $titulo = "Sessao do cliente";
        $user = User::Find($id);
        if(!empty($user->id)){
            $cliente = Cliente::Find($id);
            $endereco = Localizacao::Find($id);
            $acess_level = "";
            if($user->acess == "cliente"){
                $acess_level = "cliente";
            }
            $tip_logradouro = array(
                '1' => 'Avenida',
                '2' => 'Rua',
                '3' => 'Fazenda',
                '4' => 'Rodovia',
                '5' => 'Condominio'
            );
            $data = new \DateTime($cliente->data_nascimento );
            $difere = $data->diff( new \DateTime( date('Y-m-d') ) );
            $idade = $difere->format( '%Y anos' );
            //dd($confirmed);
            //dd($idade);

            return view(
                "cliente.cadastro",
                [
                    "user" => $user,
                    "cliente" => $cliente,
                    "endereco" => $endereco,
                    "titulo" => $titulo,
                    "acess" => $acess_level,
                    "tipo" => $tip_logradouro,
                    "idade" => $idade,
                    "confirmed" => $confirmed
                ]
            );
        }else{
            return Redirect("/cliente");
        }
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tip_logradouro = array(
            '1' => 'Avenida',
            '2' => 'Rua',
            '3' => 'Fazenda',
            '4' => 'Rodovia',
            '5' => 'Condominio'
         );
        $titulo = "Editar dados de perfil";
        $user = User::Find($id);
        $cliente =Cliente::Find($user->id);
        $locais = DB::table("localizacao as loc")->join("users AS u", "loc.user_tag_id","=","u.id")->select("tipo_logradouro")->get();
        $endereco =Localizacao::Find($user->id);
        //dd($tip_logradouro);
        //dd($locais);
        return view(
            "cliente.cadastro",
            [
                "parametro_select" => $tip_logradouro,
                "user" => $user,
                "cliente" => $cliente,
                "locais" => $locais,
                "endereco" => $endereco,
                "titulo" => $titulo
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if($request->get("confirmed") == "Cancelar"){
            $confirmed = False;
        }elseif($request->get("confirmed") == True){

       
            $endereco = Localizacao::Find($id);
            $endereco->delete();
            
            $cliente = Cliente::Find($id);
            $cliente->delete();
            
            $user = User::Find($id);
            $user->delete();
            $status = "excluido";
            return Redirect("/cliente");
        }else{
            $confirmed = True;
        }
        return $this->show($id, $confirmed);
    }
}
