<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    /**
     * Exibe uma lista de recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bike::all();
    }

    /**
     * Exibe uma lista de recursos em uma visão.
     *
     * @return \View
     */
    public function indexHtml(){
        $bikes = $this->index();
        return view('todasbikes',['bikes'=>$bikes]);
    }

    /**
     * Exibe o formulário em visão para criar um novo recurso.
     *
     * @return \Resources\View
     */
    public function createHtml()
    {
        return view('criar');
    }

    /**
     * Registra um novo recurso na base de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['vendida'] = $request->vendida == 'on' || $request->vendida == '1' ? 1 : 0;
        Bike::create($request->all());
    }

    /**
     * Exibe o recurso específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bike::findOrFail($id);
       
    }


    /**
     * Exibe o recurso específico em uma visão.
     *
     * @param  Request  $request
     * @return \Resources\View
     */
    public function showHtml(Request $request)
    {
        if($request->idBike == ''){
            return $this->indexHtml();
        }
        $bike = $this->show($request->idBike);
        return view('bike',['bike'=>$bike]);
    }

    /**
     * Consulta recursos e exibe-os em uma visão.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultHtml()
    {
        $bikes = $this->index();
        return view('selecionaBike',['bikes'=>$bikes]);
    }


    /**
     * Direciona uma ação recebida para a respectiva action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Resources\View
     */
    public function actionBike(Request $request){
        $form_bike = $request->all();
        if(array_key_exists('consultar',$form_bike))
            return $this->showHtml($request);

        if(array_key_exists('deletar',$form_bike))
            return $this->destroyHtml($request->idBike);
        
    }

        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }


    /**
     * Atualiza o recurso específico da base de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bike = Bike::findOrFail($id);
        $bike->update($request->all());
    }


    /**
     * Remove um recurso específico da base de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bike = Bike::findOrFail($id);
        $bike->delete();
    }


    /**
     * Remove um recurso específico da base de dados e redireciona para uma visão.
     *
     * @param  int  $id
     * @return \Resources\View
     */
    public function destroyHtml($id){
        $this->destroy($id);
        return redirect('/api/consult');
    }
}
