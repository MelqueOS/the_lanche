<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Produto_Combo;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$token = $request->get('id');
        $tip_produtos = array(
            '1' => 'Prato',
            '2' => 'Acompanhamento',
            '3' => 'Lanche',
            '4' => 'Sobremesa',
            '5' => 'Bebida',
            '6' => 'Combo'
         );
         $secao = array(
            1 =>"Cadastro de produto",
            2 =>"Lista de produtos"    
         );

        $tokid = 4;
        $user = User::Find($tokid);
        $entidade =  Empresa::Find($tokid);
        $produto = new Produto_Combo();    
        $produtos = DB::table("produto_combo as pdc")->join("empresa AS emp", "pdc.empresa_id","=","emp.user_tag_id")->where("emp.user_tag_id","=" ,$tokid)->get();
        $titulo = "Gerenciamento de cardapio";
        return view(
            "produtos.painel_ger_edit",
            [
                //"token" => $user->id,
                "tokid" =>$tokid,
                "titulo" => $titulo,
                "secao" => $secao,
                "parametro_select" => $tip_produtos,
                "produto" => $produto,
                "produtos" => $produtos,
                "img_lock" => "disable"
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
        $titulo = "Cadastro de produtos";
        $token = $request->get('tokid');
        if ($request->get('id')!=""){
            $user = User::Find($token);
            $entidade =  Empresa::Find($token);
            $produto = Produto_Combo::Find($request->get('id'));
            $status = "atualizado";			
		}else{
            $user = new User;
			$entidade = new Empresa;
            $produto = new Produto_Combo;
            $status = "salvo";
		}
        $produto->nome_descritivo = $request->get("nome_descritivo");
        $produto->tipo = $request->get("tipo");
        $produto->valor = $request->get("valor");
        $produto->descricao = $request->get("descricao");
        if(
            empty(
                $request->file("imagem_produto")
            )
        ){
            $url_img = $request->get("att_url");  
        }else{
            $url_img = $request->file("imagem_produto")->store("public/produto");
            $url_img = str_replace("public/","storage/",$url_img);
        }
        //$url_img = "url_img_not_found";
        $produto->url_img = $url_img;
        $produto->empresa_id = $token;
        
        $produto->save();
        
		
        //Atualiza o Status
		$request>session()->flash("status", $status);
		return redirect("/produto");
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
    public function edit($id, Request $request)
    {
        $tip_produtos = array(
            '1' => 'Prato',
            '2' => 'Acompanhamento',
            '3' => 'Lanche',
            '4' => 'Sobremesa',
            '5' => 'Bebida',
            '6' => 'Combo'
         );
         $secao = array(
            1 =>"Edição de produto",
            2 =>"Lista de produtos"    
         );
         $img_lock = "enable";

        $token = $request->get("tokid");
        $user = User::Find($token);
        $entidade =  Empresa::Find($token);
        $produto = Produto_Combo::Find($id);    
        $produtos = DB::table("produto_combo as pdc")->join("empresa AS emp", "pdc.empresa_id","=","emp.user_tag_id")->where("emp.user_tag_id","=" ,$token)->get();
        $titulo = "Gerenciamento de cardapio";
        return view(
            "produtos.painel_ger_edit",
            [
                "tokid" => $token,
                "titulo" => $titulo,
                "secao" => $secao,
                "parametro_select" => $tip_produtos,
                "produto" => $produto,
                "produtos" => $produtos,
                "img_lock" => $img_lock
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
    public function destroy($id)
    {
        
        $produto = Produto_Combo::Find($id);
        $produto->delete();
        return Redirect("/produto");
    }
}
