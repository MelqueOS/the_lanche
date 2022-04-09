<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
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
			$entidade = new Cliente;
			$status = "salvo";
		}
		$entidade->nome = $request->get("nome");
		$entidade->email = $request->get("email");
		$entidade->senha = $request->get("senha");
		$entidade->telefone = $request->get("telefone");
		$entidade->datanascimento = $request->get("datanascimento");
		$entidade->whatsapp = $request->get("whatsapp");
		$entidade->tipologadouro = $request->get("tipologadouro");
		$entidade->logradouro = $request->get("logradouro");
		$entidade->bairro = $request->get("bairro");
		$entidade->numero = $request->get("numero");
		$entidade->referencia = $request->get("referencia");
		$entidade->complemento = $request->get("complemento");
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
