<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SistemaInventario\Lugar;
use SistemaInventario\Http\Requests\StoreLugarRequest;
use SistemaInventario\Http\Requests\StoreLugarUpdateRequest;
use DB;

class LugarController extends Controller
{

    public function __construct()
    {
		$this->middleware('auth');
    }

    public function index(Request $request)
    {
		if ($request)
			{
				$query=trim($request->get('searchText'));
				$lugar=DB::table('lugars as lu')
				->select('lu.id', 'lu.nombre', 'lu.direccion', 'lu.descripcion', 'lu.telefono', 'lu.slug')
				->where ('lu.id', 'LIKE', '%'.$query.'%')
				->orWhere ('lu.nombre', 'LIKE', '%'.$query.'%')
				->orderBy('lu.id', 'desc')
				->paginate(7);
				
				
				
				return view('lugar.index', ["lugar"=>$lugar,
				                             "searchText"=>$query]);

			}
		
		
		
		
    	/*$lugar = Lugar::all();
		$lugar = Lugar::orderby('id', 'DESC')->paginate(7);

		
		return view('lugar.index', compact('lugar'));*/
    }

    public function create()
    {
		return view('lugar.create');
    }
    
    public function  store(StoreLugarRequest $request)
    {
		
		$lugar = new Lugar();
		
		$lugar->nombre=$request->input('nombre');
		$lugar->direccion=$request->input('direccion');
		$lugar->descripcion=$request->input('descripcion');
		$lugar->telefono=$request->input('telefono');
		$lugar->slug=$request->input('slug');
		$lugar->save();
		//return 'Se han guardado los datos correctamente';

		
		return redirect()->route('lugar.index')->with('status', 'Se han guardado los datos correctamente');		
		

    }

    public function show(Lugar $lugar)
    {
		
		return view('lugar.show', compact('lugar'));

    }
    public function edit(Lugar $lugar)
    {
		return view('lugar.edit', compact('lugar'));
    }

    public function update(StoreLugarUpdateRequest $request, Lugar $lugar)
    {
		$lugar->fill($request->all());
		$lugar->save();
		
		return redirect()->route('lugar.index', [$lugar])->with('status',
		'Los datos se han actualizado correctamente');
		
		
/*		return 'Los datos se han actualizado correctamente';
*/    }
    
    public function destroy(Lugar $lugar)
    {
		$lugar->delete();
		
		return redirect()->route('lugar.index')->with('status',
		'El Lugar se ha borrado correctamente');
		
/*		return 'El Lugar se ha borrado correctamente';
*/
    }

}
