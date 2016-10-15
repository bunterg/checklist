<?php

namespace App\Http\Controllers\Cadena;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cadena;
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
    return Redirect::back()->withSuccess('Cadena creada!');
	}

  public function editor($id)
  {
    $cadena = Cadena::findOrFail($id)->get();
    return view('administ.editor', ['cadena' => $cadena]);
  }

  public function destroy($id)
  {
    Cadena::findOrFail($id)->delete();
    return redirect()->route('cadenaHome');
  }
}
