<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use SistemaInventario\Marcasequipo;
use SistemaInventario\Tiposequipo;
use SistemaInventario\Lugar;
use Illuminate\Http\Request;
use SistemaInventario\Equipo;
use SistemaInventario\Http\Requests\StoreEquipoRequest;
use SistemaInventario\Http\Requests\StoreEquipoUpdateRequest;
use DB;


class EquipoController extends Controller
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
				$equipo=DB::table('equipos as e')
				->join('tiposequipos as te', 'e.tiposequipos_id','=','te.id')
				->select('e.id','e.estado', 'e.codigou', 'e.serial', 'e.descripcion', 'e.observaciones', 
				         'e.tiposequipos_id', 'e.marcasequipos_id', 'e.lugar_id', 'e.slug', 
				         'te.nombre as nombrete')
				->where ('e.id', 'LIKE', '%'.$query.'%')
				->orWhere ('e.estado', 'LIKE', '%'.$query.'%')
				->orWhere ('e.codigou', 'LIKE', $query)
				->orWhere ('e.serial', 'LIKE', $query)
				->orWhere ('te.nombre', 'LIKE', '%'.$query.'%')
				->orderBy('e.id', 'desc')
				->paginate(7);
				
				$lugar=DB::table('lugars')->get();
				$tipoequipo=DB::table('tiposequipos')->get();
				$marcaequipo=DB::table('marcasequipos')->get();
				
				
				
				return view('equipo.index', ["equipo"=>$equipo,
				                             "searchText"=>$query,
											 "tipoequipo"=>$tipoequipo, 
											 "marcaequipo"=>$marcaequipo, 
											 "lugar"=>$lugar]);

			}	
		/*$marcaequipo=DB::table('marcasequipos')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
	
		$equipo = Equipo::all();
		$equipo = Equipo::orderby('id', 'DESC')
		->paginate(7);
		
		return view('equipo.index', compact('equipo'), ["tipoequipo"=>$tipoequipo, "marcaequipo"=>$marcaequipo]);*/

    }
	
	

    public function create()
    {
		$lugar=DB::table('lugars')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		$marcaequipo=DB::table('marcasequipos')->get();
		
		return view('equipo.create',["tipoequipo"=>$tipoequipo, "marcaequipo"=>$marcaequipo, "lugar"=>$lugar]);
    }
    
    public function  store(StoreEquipoRequest $request)
    {
		//dd($request->all());
	
		$equipo = new Equipo();
		
		$equipo->lugar_id=$request->input('lugar_id');
		$equipo->tiposequipos_id=$request->input('tiposequipos_id');
		$equipo->marcasequipos_id=$request->input('marcasequipos_id');
		$equipo->estado=$request->input('estado');
		$equipo->codigou=$request->input('codigou');
		$equipo->serial=$request->input('serial');
		$equipo->descripcion=$request->input('descripcion');
		$equipo->observaciones=$request->input('observaciones');
		$equipo->slug=$request->input('slug');
		$equipo->save();
		
		//$id_extraida = Consultaren en la bd el id del ultimo registro en la tabla Equipo  
		
		//$inventario = new Inventario
		//$inventario->id_equipo = $id_extraida;
		//$inventario->save();
		
		return redirect()->route('equipo.index')->with('status',
		'Se han guardado los datos correctamente');
		
		//return 'Se han guardado los datos correctamente';

    }

    public function show(Equipo $equipo)
    {
		
		$lugar=DB::table('lugars')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		$marcaequipo=DB::table('marcasequipos')->get();
		
		return view('equipo.show', compact('equipo'),["tipoequipo"=>$tipoequipo, "marcaequipo"=>$marcaequipo, "lugar"=>$lugar]);

    }
    public function edit(Equipo $equipo)
    {
		$lugar=DB::table('lugars')->get();
		$marcaequipo=DB::table('marcasequipos')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		
		return view('equipo.edit', compact('equipo'), ["tipoequipo"=>$tipoequipo, "marcaequipo"=>$marcaequipo, "lugar"=>$lugar]);
    }

    public function update(StoreEquipoUpdateRequest $request, Equipo $equipo)
    {
		$equipo->fill($request->all());
		$equipo->save();
		
		return redirect()->route('equipo.index', [$equipo])->with('status',
		'Los datos se han actualizado correctamente');
		
		
		//return 'Los datos se han actualizado correctamente';
    }
    
    public function destroy(Equipo $equipo)
    {
		$equipo->delete();
		
		return redirect()->route('equipo.index')->with('status',
		'El Equipo se ha borrado correctamente');
		
		//return 'El Equipo se ha borrado correctamente';

    }
}
