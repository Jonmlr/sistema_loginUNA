<?php

use Illuminate\Database\Seeder;
use SistemaInventario\Tiposequipo;


class TiposequiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiposequipo::create([
        	'nombre' => 'PC',
			'slug' => 'PC',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Laptop',
			'slug' => 'Laptop',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Audífonos',
			'slug' => 'audifonos',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Mouse',
			'slug' => 'mouse',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'CPU',
			'slug' => 'cpu',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Teclado',
			'slug' => 'teclado',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Monitor',
			'slug' => 'monitor',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Corneta',
			'slug' => 'corneta',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Lectora de CD',
			'slug' => 'lectora-de-cd',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Cámara',
			'slug' => 'camara',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Impresora',
			'slug' => 'impresora',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Módem',
			'slug' => 'modem',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Router',
			'slug' => 'router',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Escáner',
			'slug' => 'escaner',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Memoria RAM',
			'slug' => 'memoria-ram',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Disco Duro',
			'slug' => 'disco-duro',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Micrófono',
			'slug' => 'microfono',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Fuente de poder',
			'slug' => 'fuente-de-poder',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Fan cooler',
			'slug' => 'fan-cooler',
        ]);
		
		Tiposequipo::create([
        	'nombre' => 'Tablet',
			'slug' => 'tablet',
        ]);
		
		
		
		
		
		
    }
}
