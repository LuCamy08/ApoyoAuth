<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends Controller
{
    public function mostrarCategorias(){
        $categoria = DB::table('categorias')->get();
        return view("/categoria/categoria")->with('categorias',$categoria);
    }
}