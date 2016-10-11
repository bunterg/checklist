<?php

namespace App\Http\Controllers\Cadena;

use Illuminate\Http\Request;
use App\Cadena;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CadenaController extends Controller
{
	//
	public function index()
	{
	  return view('administ.cadena', ['cadenas' => Cadena::all()]);
	}
	
	public function store(Request $request)
	{
    $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
    ]);
		$cadena = new Cadena;		
		$cadena->name = $request->name;		
		$cadena->description = $request->description;		
		$cadena->save();
    return Redirect::back()->withSuccess('Message sent!');
	}

  public function editor($id)
  {
    return view('administ.editor', ['id' => Cadena::where('id', $id)->get()]);
  }
}
