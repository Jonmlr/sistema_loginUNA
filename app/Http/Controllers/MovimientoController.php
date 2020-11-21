<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use SistemaInventario\Movimientosequipo;
use Illuminate\Http\Request;
use SistemaInventario\Http\Requests\StoreMovimientoequipoRequest;


class MovimientoController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }

    public function index()
    {
		$movimientoequipo = Movimientosequipo::all();
		$movimientoequipo = Movimientosequipo::orderby('id', 'DESC')->paginate(7);
		
		return view('movimientoequipo.index', compact('movimientoequipo'));
		

    }

    public function create()
    {
		return view('movimientoequipo.create');

    }
    
    public function  store(StoreMovimientoequipoRequest $request)
    {
		$movimientoquipo = new Movimientosequipo();
		
		$movimientoquipo->nombre=$request->input('nombre');
		$movimientoquipo->descripcion=$request->input('descripcion');
		$movimientoquipo->slug=$request->input('slug');
		$movimientoquipo->save();
		
		return redirect()->route('movimientoequipo.index')->with('status',
		'Se han guardado los datos correctaemnte');
	
		
		//return 'Se han guardado los datos satisfactoriamente';
	}

    public function show(Movimientosequipo $movimientoequipo)
    {
		return view('movimientoequipo.show', compact('movimientoequipo'));

    }
    public function edit(Movimientosequipo $movimientoequipo)
    {
		return view('movimientoequipo.edit', compact('movimientoequipo'));

    }

    public function update(Request $request, Movimientosequipo $movimientoequipo)
    {
		$movimientoequipo->fill($request->all());
		$movimientoequipo->save();
		
		return redirect()->route('movimientoequipo.index', [$movimientoequipo])->with('status',
		'Los datos se han actualizado correctamente');
		
		
		//return 'Los datos se han actualizado correctamente';
    }
    
    public function destroy(Movimientosequipo $movimientoequipo)
    {
		$movimientoequipo->delete();
		
		return redirect()->route('movimientoequipo.index')->with('status',
		'El movimiento de equipo se ha borrado correctamente');
		
		//return 'El movimiento de equipo se ha borrado correctamente';
    }
}
