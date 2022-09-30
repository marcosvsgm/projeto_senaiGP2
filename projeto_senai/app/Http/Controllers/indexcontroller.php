<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){


        $usuario ="id";

        $dados = [
            'id' =>$usuario
        ];

        return view('index');

    }
}
