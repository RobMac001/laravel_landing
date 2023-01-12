<?php

namespace App\Http\Controllers;

use App\Models\subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
       // dd($request);
       /* $data= $request->validate( [
            'name'=>  'required|max:200',
'email'=>  'required|max:200',

]); */

$validator = Validator::make($request->all(), [
           'name' => 'required',
           'email' => 'required|email',
          
       ]);

       if ($validator->fails()) {
         return 'fail';

       }else{
         $inserted=Subscribers::create([

      
        'nombre' => $request->name,
        'email' => $request->email,
        'apellidos' => 'null',
        'telefono' => 'null',
        'mensaje' => 'null',
        'asunto' => 'null',
              "web" => $request->web,
      "sector" => $request->sector,
      "pais" => $request->pais,
      "presupuesto" => $request->presupuesto,
      "objetivo" => $request->objetivo,
      "problema_actual" => $request->problema_actual,
      "otros_objetivo" => $request->otros_objetivo,
      "publico" => $request->publico_objetivo,
      "competencia" => $request->competencia,
      "metas" => $request->metas_kpis,
      "informacion_adicional" => $request->informacion_adicional,
        
    ]);

	if($inserted){
	    return 'OK';
	}else{return 'fail';}
       }

/* aqui termina todo */
			

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
