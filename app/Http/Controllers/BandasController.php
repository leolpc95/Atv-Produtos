<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandasController extends Controller
{
    private $objBanda;



    public function __construct(){
            $this->objBanda=new Banda();
    }


    public function index()
    {
       $bandas =$this->objBanda->all();
        return view('bandas', compact('bandas'));
    }

    public function create()
    {
        return view('createBandas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bandas=$this->objBanda->all();
        //$dados = $request->all();
        $bandas = new Banda();
        $bandas ->nome =$dados['nome'];
        $bandas ->estilo=$dodos['estilo'];
        $bandas ->ano_criacao=$dados['ano_criacao'];
        $bandas ->total_de_discos=$dados['total_de_discos'];
        $bandas ->save();
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
