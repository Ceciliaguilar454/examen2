<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Audifonos;

class AudifonosController extends Controller
{
    //
    public function show(){
        return Audifinos::all();
    }
}
{
    public function store(Request $request)

    $audifono = new Audifono();
    $audifono = marca = $request->marca;
    $audifono = modelo = $request->modelo;
    $audifono = precio = $request->precio;
    $audifono = tipo = $request>tipo;
    $audifono = save();

    return redirect()->route('audifonos.index');
}


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'marca' => 'required|max:8',
            'modelo' => 'required',
            'precio' => 'required',
            'tipo'=> 'required'
        ]);
              
    }   
        if ($validator->fails()) 
        {
            return response()->json(["message"=>"Error"]);                        
        }
        
        try
        
        public function store(Request $request)
{
    $request->validate([
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255|unique:audifonos,modelo',
        'precio' => 'required|numeric|min:0',
        'tipo' => 'required|string|max:50',
    ]);

    $audifono = new Audifono();
    $audifono->marca = $request->marca;
    $audifono->modelo = $request->modelo;
    $audifono->precio = $request->precio;
    $audifono->tipo = $request->tipo;
    $audifono->save();

    catch(Exception $e)
    return redirect()->route('audifonos.index')->with('success', 'Audífono creado exitosamente');
}
