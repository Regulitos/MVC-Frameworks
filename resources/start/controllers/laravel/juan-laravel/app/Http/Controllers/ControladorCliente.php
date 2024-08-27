<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{   
    
    
    public function control(){
        $clients = [ 
            [ 'id' => 0 , 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com' ] ,
            [ 'id' => 1 , 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com' ] ,
        ];
        return view('index', ['clientes'=>$clients]);
    }

    public function cedula($id){    
        return view('details');
        // return 'Mi identificacion es:'.$id;
    }
}
