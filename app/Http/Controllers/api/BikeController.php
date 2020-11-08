<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bike::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \View
     */
    public function indexHtml(){
        $bikes = $this->index();
        return view('todasbikes',['bikes'=>$bikes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criar');
    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bike::findOrFail($id);
       
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultHtml()
    {
        $bikes = $this->index();
        return view('selecionaBike',['bikes'=>$bikes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultHtmlById(Request $request)
    {
        if($request->idBike == ''){
            return $this->indexHtml();
        }
        $bike = $this->show($request->idBike);
        return view('bike',['bike'=>$bike]);
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

    public function actionBike(Request $request){
        $form_bike = $request->all();
        if(array_key_exists('consultar',$form_bike))
            return $this->consultHtmlById($request);

        if(array_key_exists('deletar',$form_bike)){
            $this->destroy($request->idBike);
            return redirect('/api/consult');
        }
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
        $bike = Bike::findOrFail($id);
        $bike->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bike = Bike::findOrFail($id);
        $bike->delete();
    }
}
