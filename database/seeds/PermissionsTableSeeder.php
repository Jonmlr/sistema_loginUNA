<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Asignados
    	Permission::create([
        	'name'        => 'Lista Asignado',
        	'slug' 		  => 'asignado.index',
        	'description' => 'Lista y navega todos los Asignado del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de Asignado',
        	'slug' 		  => 'asignado.show',
        	'description' => 'Ver en detalle cada Asignado del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Asignado',
        	'slug' 		  => 'asignado.create',
        	'description' => 'Crea un Asignado del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Asignado',
        	'slug' 		  => 'asignado.edit',
        	'description' => 'Editar cualquier dato de un Asignado del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Asignado',
        	'slug' 		  => 'asignado.destroy',
        	'description' => 'Eliminar cualquier Asignado del sistema',
        ]);

        // Equipos
        Permission::create([
        	'name'        => 'Lista Equipos',
        	'slug' 		  => 'equipo.index',
        	'description' => 'Lista y navega todos los Equipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de equipo',
        	'slug' 		  => 'equipo.show',
        	'description' => 'Ver en detalle cada Equipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Equipos',
        	'slug' 		  => 'equipo.create',
        	'description' => 'Crea un equipo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Equipos',
        	'slug' 		  => 'equipo.edit',
        	'description' => 'Editar cualquier dato de un equipo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Equipos',
        	'slug' 		  => 'equipo.destroy',
        	'description' => 'Eliminar cualquier equipo del sistema',
        ]);

        // Lugares
    	Permission::create([
        	'name'        => 'Lista Lugar',
        	'slug' 		  => 'lugar.index',
        	'description' => 'Lista y navega todos los Lugares del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de Lugar',
        	'slug' 		  => 'lugar.show',
        	'description' => 'Ver en detalle cada Lugar del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Lugar',
        	'slug' 		  => 'lugar.create',
        	'description' => 'Crea un Lugar del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Lugar',
        	'slug' 		  => 'lugar.edit',
        	'description' => 'Editar cualquier dato de un Lugar del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Lugar',
        	'slug' 		  => 'lugar.destroy',
        	'description' => 'Eliminar cualquier Lugar del sistema',
        ]);

        // MarcasEquipos
    	Permission::create([
        	'name'        => 'Lista Marcas de Equipos',
        	'slug' 		  => 'marcaequipo.index',
        	'description' => 'Lista y navega todos los Lugares del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de Marcas de Equipos',
        	'slug' 		  => 'marcaequipo.show',
        	'description' => 'Ver en detalle cada Marcas de Equipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Marcas de Equipos',
        	'slug' 		  => 'marcaequipo.create',
        	'description' => 'Crea un Marcas de Equipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Marcas de Equipos',
        	'slug' 		  => 'marcaequipo.edit',
        	'description' => 'Editar cualquier dato de un Marcas de Equipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Marcas de Equipos',
        	'slug' 		  => 'marcaequipo.destroy',
        	'description' => 'Eliminar cualquier Marcas de Equipos del sistema',
        ]);

        // Roles
        Permission::create([
        	'name'        => 'Lista Roles',
        	'slug' 		  => 'role.index',
        	'description' => 'Lista y navega todos los Roles del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de rol',
        	'slug' 		  => 'role.show',
        	'description' => 'Ver en detalle cada Roles del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Roles',
        	'slug' 		  => 'role.create',
        	'description' => 'Crea un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Roles',
        	'slug' 		  => 'role.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Roles',
        	'slug' 		  => 'role.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
        ]);

        

        // Tipo de Equipos
        Permission::create([
        	'name'        => 'Lista TiposEquipos',
        	'slug' 		  => 'tipoequipo.index',
        	'description' => 'Lista y navega todos los TiposEquipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de tipo de equipo',
        	'slug' 		  => 'tipoequipo.show',
        	'description' => 'Ver en detalle cada TiposEquipos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de TiposEquipos',
        	'slug' 		  => 'tipoequipo.create',
        	'description' => 'Crea un tipo de equipo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de TiposEquipos',
        	'slug' 		  => 'tipoequipo.edit',
        	'description' => 'Editar cualquier dato de un tipo de equipo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar TiposEquipos',
        	'slug' 		  => 'tipoequipo.destroy',
        	'description' => 'Eliminar cualquier tipo de equipo del sistema',
        ]);

        // User
        Permission::create([
        	'name'        => 'Lista usuario',
        	'slug' 		  => 'user.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de usuario',
        	'slug' 		  => 'user.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
		 Permission::create([
        	'name'        => 'Creación de usuario',
        	'slug' 		  => 'user.create',
        	'description' => 'Crea un usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de usuario',
        	'slug' 		  => 'user.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar usuario',
        	'slug' 		  => 'user.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',
        ]);
		

    }
}