<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produto_Combo;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tip_produtos = array(
            '1' => 'Prato',
            '2' => 'Acompanhamento',
            '3' => 'Lanche',
            '4' => 'Sobremesa',
            '5' => 'Bebida',
            '6' => 'Combo'
         );
         $tokid=1;
        //$produtos = DB::table("produto_combo as pdc")->join("empresa AS emp", "pdc.empresa_id","=","emp.user_tag_id")->where("emp.user_tag_id","=" ,$tokid)->get();
        $produtos = Produto_Combo::All();
        return view(
            "cliente.cardapio",
            [
                "produtos" => $produtos,
                "tipo" => $tip_produtos,
                "parametro_select" => $tip_produtos,
                "tokid" => $tokid,
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
        $titulo = "Salvar pedido";
        $token = $request->get('tokid');
        //dd($token);
        $usr_token = $request->get('usr_token');
        $revise = $request->get('revise');
        $itens_pedido = $request->get("item_pedido");
        if($revise == "false"){
            $produtos = DB::table("produto_combo as pdc")->join("empresa AS emp", "pdc.empresa_id","=","emp.user_tag_id")->where("emp.user_tag_id","=" ,$token)->get();
            //dd($produtos);
            return view(
                "pedido.revise",
                [
                   "produtos" => $produtos,
                   "itens_pedido" => $itens_pedido
                ] 
            );
        }else{
            //dd($request->get("item_pedido"));
            $n_itens = count($request->get("item_pedido"));
            //dd($n_itens);
        }
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
