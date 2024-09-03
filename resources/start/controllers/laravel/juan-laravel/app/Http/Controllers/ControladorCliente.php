<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ControladorCliente extends Controller
{   
    
    public function index(){
        
    }
    
    public function control(){
        $clientes = Cliente::all();
        if($clientes->isEmpty()){
            $data = [
                'message' => 'No hay datos en la base de datos',
                'status' => 200
            ];
            return response()->json($data, 200);
        }
        return view('index', ['clientes'=>$clientes]);
    }

    public function cedula($id){     
            $cliente = Cliente::find($id);
            if(!$cliente){
                $data = [
                    'message'=>'Contacto no encontrado',
                   'status'=>404
                ];
                return response()->json($data,404);
            }
        //return response()->json($cliente,200);
        return view('details',['cliente'=>$cliente]);
    }
    

    
}
