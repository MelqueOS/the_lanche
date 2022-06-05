<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Localizacao;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    //Comentem essa primeira função para criar usuario de empresa

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($confirmed = False)
    {
        //Comentem apartir daqui
        $titulo = "Painel Administrativo da Empresa";
        
        $empresa = Empresa::Find(Auth::user()->id);
        $endereco = Localizacao::Find(Auth::user()->id);
        $acess_level = "";
        if(Auth::user()->acess == "empresa"){
            $acess_level = "empresa";
        }
        $tip_logradouro = array(
            '1' => 'Avenida',
            '2' => 'Rua',
            '3' => 'Fazenda',
            '4' => 'Rodovia',
            '5' => 'Condominio'
        );
        return view(
            "empresa.empresa",
            [
                "user" => Auth::user(),
                "empresa" => $empresa,
                "endereco" => $endereco,
                "titulo" => $titulo,
                "acess" => $acess_level,
                "tipo" => $tip_logradouro,
                "confirmed" => $confirmed
            ]
        );
        //Ate aqui, descomente abaixo
        /*
        //Antigo codigo da index
        $tip_logradouro = array(
            '1' => 'Avenida',
            '2' => 'Rua',
            '3' => 'Fazenda',
            '4' => 'Rodovia',
            '5' => 'Condominio'
         );
        $locais = Localizacao::All();
        $titulo = "Cadastro de Empresas";
        $endereco = new Localizacao();
        $empresa = new Empresa();
        $user = new User();
        
        return view(
            "empresa.cadastro",
            [
                "titulo" => $titulo,
                "parametro_select" => $tip_logradouro,
                "locais" => $locais,
                "endereco" => $endereco,
                "user"=> $user, 
                "empresa"=> $empresa
            ]
        );*/
        //descomente ate aqui
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
        $titulo = "Cadastro de empresas";
        if ($request->get('id')!=""){
            $user = User::Find($request->get('id'));
            $entidade =  Empresa::Find($request->get('id'));
            $endereco =  Localizacao::Find($request->get('id'));
            $status = "atualizado";			
		}else{
            $user = new User;
			$entidade = new Empresa;
            $endereco = new Localizacao;
			$status = "salvo";
		}
        $user->name = $request->get("nome");
        $user->email = $request->get("email");
        $user->password = Hash::make($request->get("senha"));
        $user->acess = "empresa";
        $user->save();
        $tag_user = $user->id;
        
		$entidade->cnpj = $request->get("cnpj");
		$entidade->telefone = $request->get("telefone");
		$entidade->razao_social = $request->get("razsocial");
		$entidade->user_tag_id = $tag_user;
		
        $endereco->tipo_logradouro = $request->get("tipologadouro");
		$endereco->logradouro = $request->get("logradouro");
		$endereco->bairro = $request->get("bairro");
		$endereco->numero = $request->get("numero");
		//$endereco->referencia = $request->get("referencia");
		//$endereco->complemento = $request->get("complemento");
        $endereco->user_tag_id = $tag_user;
        $endereco->save();
        
        $entidade->save();
		//Atualiza o Status
		$request>session()->flash("status", $status);
		return redirect("/empresa");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $confirmed = False)
    {        
        $titulo = "Painel Administrativo da Empresa";
        $user = User::Find($id);
        if(!empty($user->id)){
            $empresa = Empresa::Find($id);
            $endereco = Localizacao::Find($id);
            $acess_level = "";
            if($user->acess == "empresa"){
                $acess_level = "empresa";
            }
            $tip_logradouro = array(
                '1' => 'Avenida',
                '2' => 'Rua',
                '3' => 'Fazenda',
                '4' => 'Rodovia',
                '5' => 'Condominio'
            );
            return view(
                "empresa.empresa",
                [
                    "user" => $user,
                    "empresa" => $empresa,
                    "endereco" => $endereco,
                    "titulo" => $titulo,
                    "acess" => $acess_level,
                    "tipo" => $tip_logradouro,
                    "confirmed" => $confirmed
                ]
            );
        }else{
            return Redirect("/empresa");
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
        $empresa =Empresa::Find($user->id);
        $locais = DB::table("localizacao as loc")->join("users AS u", "loc.user_tag_id","=","u.id")->select("tipo_logradouro")->get();
        $endereco =Localizacao::Find($user->id);
        //dd($tip_logradouro);
        //dd($locais);
        return view(
            "empresa.cadastro",
            [
                "parametro_select" => $tip_logradouro,
                "user" => $user,
                "empresa" => $empresa,
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
            
            $cliente = Empresa::Find($id);
            $cliente->delete();
            
            $user = User::Find($id);
            $user->delete();
            $status = "excluido";
            return Redirect("/empresa");
        }else{
            $confirmed = True;
        }
        return $this->show($id, $confirmed);
    }
}
