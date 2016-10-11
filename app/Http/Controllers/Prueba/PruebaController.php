<?php

namespace App\Http\Controllers\Prueba;

use App\Pueba;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    // 
    //$pruebas = \App\Flight::all();
    public function index()
    {
        foreach (\App\Prueba::all() as $prueba) {
            echo $prueba->name;
        }
        return view('test.fom');
    }

    public function store(Request $request)
    {
        // Validate the request...

        $prueba = new \App\Prueba;

        $prueba->name = $request->name;

        $prueba->save();
    }
}
