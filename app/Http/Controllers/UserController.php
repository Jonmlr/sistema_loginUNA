<?php

namespace SistemaInventario\Http\Controllers;

use SistemaInventario\User;
use SistemaInventario\Lugar;
use SistemaInventario\Asignado;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use SistemaInventario\Http\Requests\StoreUserRequest;
use SistemaInventario\Http\Requests\StoreUserUpdateRequest;
use DB;

class UserController extends Controller
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
				$user=DB::table('users as usu')
				->select('usu.id as useid', 'usu.name as usuname', 'usu.lastname as usulast', 'usu.lugar_id', 'usu.email', 'usu.cedula', 'usu.slug')
				->where ('usu.id', 'LIKE', '%'.$query.'%')
				->orWhere ('usu.name', 'LIKE', '%'.$query.'%')
				->orWhere ('usu.lastname', 'LIKE', '%'.$query.'%')
				->orWhere ('usu.cedula', 'LIKE', '%'.$query.'%')
				->orderBy('usu.id', 'desc')
				->paginate(7);
				
				$role_user=DB::table('role_user')->get();
				$roles=DB::table('roles')->get();
				$lugar=DB::table('lugars')->get();
				
			
				return view('user.index', ["user"      =>$user,
				                           "searchText"=>$query,
										   "role_user" =>$role_user,
										   "roles"     =>$roles,
										   "lugar"     =>$lugar]);

			}

        /*$user = User::all();
        $user = User::orderby('id', 'DESC')->paginate(7);
       
        return view('user.index', compact('user'));*/
    }
	
    public function create()
    {
		$roles=DB::table('roles')->get();
		$lugar=DB::table('lugars')->get();
		
        return view('user.create',["roles"=>$roles, "lugar"=>$lugar]);
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User();
		
		$user->name=$request->input('name');
		$user->lastname=$request->input('lastname');
		$user->email=$request->input('email');
		$user->password=bcrypt($request->input('password'));
		$user->cedula=$request->input('cedula');
		$user->lugar_id=$request->input('lugar_id');
		$user->slug=$request->input('slug');
		$user->save();
		
		$user->roles()->sync($request->get('roles'));

		
		return redirect()->route('user.index')->with('status',
		'Se han guardado los datos correctamente');
    }

    public function show(User $user)
    {
		$role_user=DB::table('role_user')->get();
		$roles=DB::table('roles')->get();
		$lugar=DB::table('lugars')->get();
		
        return view('user.show', compact('user', 'roles', 'lugar', 'role_user'));
    }

    public function edit(User $user)
    {
        
		$roles = Role::get();
		$lugar = Lugar::get();

        return view('user.edit', compact('user', 'roles', 'lugar'));
    }

    public function update(StoreUserUpdateRequest $request, User $user)
    {


		$data = request()->validate([
			'name' => 'max:100',
			'lastname' => 'max:100',
            'email' => 'email|max:255',
            'password' => 'nullable',
			'cedula' => 'min:7|max:10',
			]);
			
		$data['password'] = bcrypt($data['password']);

        $user->update($data);
	
        $user->roles()->sync($request->get('roles'));
									

		

		
        return redirect()->route('user.index', [$user])->with('status',
        'Los datos se han actualizado correctamente');
    }

    public function destroy(User $user)
    {
			
		
		$exists=DB::table('asignados')
		->where('user_id', '=', $user->id)
		->first();
		
		
		
        //dd($user->id);
		if($exists)
		 
			{
				return redirect()->route('user.index')->with('status2',
				'El Usuario tiene uno o más equipos asignados. No es posible eliminarlo.');	
			}
		else	
			{
				$user->delete();
				
				return redirect()->route('user.index')->with('status',
				'El Usuario se ha borrado correctamente');
			}
    }
}