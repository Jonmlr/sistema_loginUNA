<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SistemaInventario\Tiposequipo;
use SistemaInventario\Http\Requests\StoreTipoequipoRequest;
use SistemaInventario\Http\Requests\StoreTipoequipoUpdateRequest;
use DB;

class TipoEquipoController extends Controller
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
				$tipoequipo=DB::table('tiposequipos as te')
				->select('te.id', 'te.nombre as nombrete', 'te.slug')
				->where ('te.id', 'LIKE', '%'.$query.'%')
				->orWhere ('te.nombre', 'LIKE', '%'.$query.'%')
				->orderBy('te.id', 'desc')
				->paginate(7);
			
				return view('tipoequipo.index', ["tipoequipo"=>$tipoequipo,
				                             "searchText"=>$query]);

			}
		
		/*$tipoequipo = Tiposequipo::all();		
		$tipoequipo = Tiposequipo::orderby('id', 'DESC')->paginate(7);

		
		return view('tipoequipo.index', compact('tipoequipo'));*/

    }

    public function create()
    {
/*		$tipoequipo=DB::table('tipoequipo')->where(
*/		return view('tipoequipo.create');
    }
    
    public function  store(StoreTipoequipoRequest $request)
    {
		$tipoequipo = new Tiposequipo();
		
		$tipoequipo->nombre=$request->input('nombre');
		$tipoequipo->slug=$request->input('slug');
		$tipoequipo->save();
		
		return redirect()->route('tipoequipo.index')->with('status',
		'Se han guardado los datos correctamente');
		
		//return 'Se han guardado los datos correctamente';
    }

    public function show(Tiposequipo $tipoequipo)
    {
		//$tipoequipo = Tiposequipo::where('slug','=',$slug)->firstOrFail();
		//return $slug;
		//$tipoequipo = Tipo_equipo::find($id);
		
		return view('tipoequipo.show', compact('tipoequipo'));
    }
    public function edit(Tiposequipo $tipoequipo)
    {
		return view('tipoequipo.edit', compact('tipoequipo'));

    }

    public function update(StoreTipoequipoUpdateRequest $request, Tiposequipo $tipoequipo)
    {
		$tipoequipo->fill($request->all());
		$tipoequipo->save();
		
		return redirect()->route('tipoequipo.index', [$tipoequipo])->with('status',
		'Los datos se han actualizado correctamente');
		
		
		//return 'Los datos se han actualizado correctamente';
    }
    
    public function destroy(Tiposequipo $tipoequipo)
	{
		$tipoequipo->delete();
		
		return redirect()->route('tipoequipo.index')->with('status',
		'El Tipo de equipo se ha borrado correctamente');
		
		//return 'El Tipo de equipo se ha borrado correctamente';
    }
}
