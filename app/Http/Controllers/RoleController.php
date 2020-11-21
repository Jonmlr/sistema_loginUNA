<?php

namespace SistemaInventario\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use SistemaInventario\Http\Requests\StoreRoleRequest;
use SistemaInventario\Http\Requests\StoreRoleUpdateRequest;
use DB;

class RoleController extends Controller
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
				$role=DB::table('roles as rol')
				->select('rol.id', 'rol.name as rolname', 'rol.slug')
				->where ('rol.id', 'LIKE', '%'.$query.'%')
				->orWhere ('rol.name', 'LIKE', '%'.$query.'%')
				->orderBy('rol.id', 'desc')
				->paginate(7);
			
				return view('role.index', ["role"=>$role,
				                             "searchText"=>$query]);

			}
		
		
        /*$role = Role::all();
        $role = Role::orderby('id', 'DESC')->paginate(7);
       
        return view('role.index', compact('role'));*/
    }

    public function create()
    {
        $permissions = Permission::get();

        return view('role.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));
		

        return redirect()->route('role.index')
            ->with('status', 'Rol guardado con éxito');
    }

    public function show(Role $role)
    {
        return view('role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $permissions = Permission::get();
        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(StoreRoleUpdateRequest $request, Role $role)
    {

        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions'));
		
        return redirect()->route('role.index', [$role])->with('status',
        'Los datos se han actualizado correctamente');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        
        return redirect()->route('role.index')->with('status',
        'El Usuario se ha borrado correctamente');
    }
}