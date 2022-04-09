<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;
use App\Models\Localizacao;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Cadastro de clientes";
        return view(
            "telascadastro.cadastro",
            [
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
        if ($request->get('id')!=""){
			$entidade = Cliente::Find($request->get('id'));
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
        return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
