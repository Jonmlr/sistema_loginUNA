<?php

namespace SistemaInventario\Http\Controllers;

use Illuminate\Http\Request;
use SistemaInventario\User;
use SistemaInventario\Equipo;
use SistemaInventario\Tiposequipo;
use SistemaInventario\Asignado;
use SistemaInventario\Http\Requests\StoreAsignadoRequest;
use SistemaInventario\Http\Requests\StoreAsignadoUpdateRequest;
use DB;

class AsignadoController extends Controller
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
				$asignado=DB::table('asignados as as')
				->join('users as us', 'as.user_id','=','us.id')
				->join('equipos as e', 'as.equipos_id', '=', 'e.id')
				->join('tiposequipos as te', 'e.tiposequipos_id','=','te.id')
				->select('as.id', 'as.equipos_id', 'as.user_id', 
				         'te.nombre as nombrete', 
						 'us.id as iduser', 'us.name as nameus', 'us.lastname as namelast',
						 'e.codigou', 'e.estado as estadoequi')
				->where ('as.id', 'LIKE', '%'.$query.'%')
				->orWhere ('as.equipos_id', 'LIKE', '%'.$query.'%')
				->orWhere ('as.user_id', 'LIKE', '%'.$query.'%')
				->orWhere ('te.nombre', 'LIKE', '%'.$query.'%')
				->orWhere ('us.name', 'LIKE', '%'.$query.'%')
				->orWhere ('e.codigou', 'LIKE', '%'.$query.'%')
				->orderBy('us.name', 'asc')
				->paginate(7);
				
				$user_ultima_id=0;
				$equipos=DB::table('equipos')->get();
				$user=DB::table('users')->get();
				$tipoequipo=DB::table('tiposequipos')->get();
				
				return view('asignado.index', ["asignado"=>$asignado,
				                               "searchText"=>$query,
											   "user_ultima_id"=>$user_ultima_id,
											   "equipos"=>$equipos, 
											   "user"=>$user, 
											   "tipoequipo"=>$tipoequipo]);

			}

		/*$user=DB::table('users')->get();
		$equipos=DB::table('equipos as e')->where('e.estado','=','ACTIVO')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		
    	$asignado = Asignado::all();
		$asignado = Asignado::orderby('id', 'DESC')
		->paginate(7);

		return view('asignado.index', compact('asignado'), ["equipos"=>$equipos, "user"=>$user, "tipoequipo"=>$tipoequipo]);*/
    }

    public function create()
    {
		$equipos=DB::table('equipos')->get();
		$user=DB::table('users')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		$asignado=DB::table('asignados')->get();

		return view('asignado.create',["equipos"=>$equipos, "user"=>$user,  "tipoequipo"=>$tipoequipo, "asignado"=>$asignado]);
    }
    
    public function  store(StoreAsignadoRequest $request)
    {
		
	
		$asignado = new Asignado();
		
		$asignado->equipos_id=$request->input('equipos_id');
		$asignado->user_id=$request->input('user_id');
		$asignado->save();
		//return 'Se han guardado los datos correctamente';

		
		return redirect()->route('asignado.index')->with('status', 'Se han guardado los datos correctamente');		
		

    }

    public function show(Asignado $asignado)
    {
		
		$equipos=DB::table('equipos')->get();
		$user=DB::table('users')->get();
		$tipoequipo=DB::table('tiposequipos')->get();
		
		return view('asignado.show', compact('asignado'),["equipos"=>$equipos, "user"=>$user, "tipoequipo"=>$tipoequipo]);

    }
    public function edit(Asignado $asignado)
    {
		$equipos=DB::table('equipos')->get();
		$user=DB::table('users')->get();
		$tipoequipo=DB::table('tiposequipos')->get();

		return view('asignado.edit', compact('asignado'),["equipos"=>$equipos, "user"=>$user, "tipoequipo"=>$tipoequipo]);
    }

    public function update(StoreAsignadoUpdateRequest $request, Asignado $asignado)
    {
		$asignado->fill($request->all());
		$asignado->save();
		
		return redirect()->route('asignado.index', [$asignado])->with('status',
		'Los datos se han actualizado correctamente');
		
		
/*		return 'Los datos se han actualizado correctamente';
*/    }
    
    public function destroy(Asignado $asignado)
    {
		$asignado->delete();
		
		return redirect()->route('asignado.index')->with('status',
		'La Asignación se ha borrado correctamente');
		
/*		return 'La asignación se ha borrado correctamente';
*/
    }
}