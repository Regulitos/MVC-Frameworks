<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControladorCliente extends BaseController
{
    public function control(){
        return 'Nuevo controlador con el metodo control';
    }

    public function cedula(){
        return 'Mi identificacion es:'.$id;
    }
}


