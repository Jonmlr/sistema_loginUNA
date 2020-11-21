<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SistemaInventario\Lugar;
use SistemaInventario\Equipo;
use SistemaInventario\Inventario;
use SistemaInventario\Tiposequipo;
use SistemaInventario\Http\Requests\StoreInventarioRequest;
use DB;

class InventarioController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }

    public function index(Request $request)
    {
		$equipos=DB::table('equipos')->get();
		$lugar=DB::table('lugars')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		
    	$inventario = Inventario::all();
		$inventario = Inventario::orderby('id', 'DESC')->paginate(7);
		
	return view('inventario.index', compact('inventario'), ["equipos"=>$equipos, "lugar"=>$lugar, "tipoequipo"=>$tipoequipo]);
    }

    public function create()
    {
		$equipos=DB::table('equipos')->get();
		$lugar=DB::table('lugars')->get();
				$tipoequipo=DB::table('tiposequipos')->get();

		
		return view('inventario.create',["equipos"=>$equipos, "lugar"=>$lugar, "tipoequipo"=>$tipoequipo]);
    }
    
    public function  store(StoreInventarioRequest $request)
    {
		
	
		$inventario = new Inventario();
		
		$inventario->equipos_id=$request->input('equipos_id');
		$inventario->lugar_id=$request->input('lugar_id');
		$inventario->slug=$request->input('slug');
		$inventario->save();
		//return 'Se han guardado los datos correctamente';

		
		return redirect()->route('inventario.index')->with('status', 'Se han guardado los datos correctamente');		
		

    }

    public function show(Inventario $inventario)
    {
		
		return view('inventario.show', compact('inventario'));

    }
    public function edit(Inventario $inventario)
    {
		$equipos=DB::table('equipos')->get();
		$lugar=DB::table('lugars')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		return view('inventario.edit', compact('inventario'),["equipos"=>$equipos, "lugar"=>$lugar, "tipoequipo"=>$tipoequipo]);
    }

    public function update(Request $request, Inventario $inventario)
    {
		$inventario->fill($request->all());
		$inventario->save();
		
		return redirect()->route('inventario.index', [$inventario])->with('status',
		'Los datos se han actualizado correctamente');
		
		
/*		return 'Los datos se han actualizado correctamente';
*/    }
    
    public function destroy(Inventario $inventario)
    {
		$inventario->delete();
		
		return redirect()->route('inventario.index')->with('status',
		'El Inventario se ha borrado correctamente');
		
/*		return 'El Lugar se ha borrado correctamente';
*/
    }
}
