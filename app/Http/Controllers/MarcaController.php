<?php

namespace SistemaInventario\Http\Controllers;
use SistemaInventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SistemaInventario\Marcasequipo;
use SistemaInventario\Http\Requests\StoreMarcaequipoRequest;
use SistemaInventario\Http\Requests\StoreMarcaequipoUpdateRequest;
use DB;


class MarcaController extends Controller
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
				$marcaequipo=DB::table('marcasequipos as mar')
				->select('mar.id', 'mar.nombre as nombreme', 'mar.modelo', 'mar.slug')
				->where ('mar.id', 'LIKE', '%'.$query.'%')
				->orWhere ('mar.nombre', 'LIKE', '%'.$query.'%')
				->orWhere ('mar.modelo', 'LIKE', '%'.$query.'%')
				->orderBy('mar.id', 'desc')
				->paginate(7);
				
				
				
				return view('marcaequipo.index', ["marcaequipo"=>$marcaequipo,
				                             "searchText"=>$query]);

			}


		
		/*$marcaequipo = Marcasequipo::all();
		$marcaequipo = Marcasequipo::orderby('id', 'DESC')->paginate(7);

		
		return view('marcaequipo.index', compact('marcaequipo'));*/
    }

    public function create()
    {
		return view('marcaequipo.create');
    }
    
    public function  store(StoreMarcaequipoRequest $request)
    {
		$marcaequipo = new Marcasequipo();
		
		$marcaequipo->nombre=$request->input('nombre');
		$marcaequipo->modelo=$request->input('modelo');
		$marcaequipo->slug=$request->input('slug');
		$marcaequipo->save();
		
		return redirect()->route('marcaequipo.index')->with('status',
		'Se han guardado los datos correctamente');
		
		//return 'Se han guardado los datos satisfactoriamente';
		
    }

    public function show(Marcasequipo $marcaequipo)
    {
		return view('marcaequipo.show', compact('marcaequipo'));

    }
    public function edit(Marcasequipo $marcaequipo)
    {
		return view('marcaequipo.edit', compact('marcaequipo'));
    }

    public function update(StoreMarcaequipoUpdateRequest $request, Marcasequipo $marcaequipo)
    {
		$marcaequipo->fill($request->all());
		$marcaequipo->save();
		
		return redirect()->route('marcaequipo.index', [$marcaequipo])->with('status',
		'Los datos se han actualizado correctamente');
		
		
		//return 'Los datos se han actualizado correctamente';
    }
    
    public function destroy(Marcasequipo $marcaequipo)
    {
		$marcaequipo->delete();
		
		return redirect()->route('marcaequipo.index')->with('status',
		'La Marca de equipo se ha borrado correctamente');
		
		//return 'La Marca de equipo se ha borrado correctamente';

    }
}
