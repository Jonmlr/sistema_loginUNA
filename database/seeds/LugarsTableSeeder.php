<?php

use Illuminate\Database\Seeder;
use SistemaInventario\Lugar;

class LugarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lugar::create([
        	'nombre' => 'Departamento Historia y Filosofía',
			'direccion' => 'Calle Agustín Lara No. 69-B',
			'telefono' => '02125259312',
			'slug' => 'departamento-historia-y-filosofia',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento de Historia Moderna',
			'direccion' => 'Av. Independencia No. 241',
			'telefono' => '04265288321',
			'slug' => 'departamento-de-historia-moderna',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Facultad de Humanidades',
			'direccion' => 'Calle Zaragoza No. 1010',
			'telefono' => '04125180031',
			'slug' => 'facultad-de-humanidades',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Área de Derecho Internacional Público',
			'direccion' => 'Av. 5 de Mayo No. 1108',
			'telefono' => '04144130853',
			'slug' => 'area-de-derecho-internacional-publico',
        ]);
		
		Lugar::create([
        	'nombre' => 'Coordinación de Administración de Empresas',
			'direccion' => 'Calle Almada No. 156',
			'telefono' => '04162058175',
			'slug' => 'coordinacion-de-administracion-de-empresas',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Oficina de Ciencias Jurídicas Básicas',
			'direccion' => 'Blvd. Benito Juarez S/N',
			'telefono' => '04268510486',
			'slug' => 'oficina-de-ciencias-juridicas-basicas',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento de Matemáticas',
			'direccion' => 'Calle Ocampo 149',
			'telefono' => '02121206256',
			'slug' => 'departamento-de-matematicas',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Biblioteca del Área B',
			'direccion' => 'Central Esq. Benito Juarez',
			'telefono' => '02124970186',
			'slug' => 'biblioteca-del-area-b',
        ]);
		
		Lugar::create([
        	'nombre' => 'Coordinación de Biología Funcional',
			'direccion' => 'Calle Riva Palacios No. 465',
			'telefono' => '04146419407',
			'slug' => 'coordinacion-de-biologia-funcional',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Área Administrativa de Ingeniería Química',
			'direccion' => 'Av. Indepedencia No. 85',
			'telefono' => '04162019476',
			'slug' => 'area-administrativa-de-ingenieria-quimica',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Oficina de Contabilidad',
			'direccion' => 'Boullevar Benito Juarez No. 197 -A',
			'telefono' => '04142084673',
			'slug' => 'oficina-de-contabilidad',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Coordinación de Ingeniería Eléctrica',
			'direccion' => 'Av, 18 de Marzo Esq. Blvd.M. Avila Camacho No. 1372',
			'telefono' => '041491847106',
			'slug' => 'coordinacion-de-ingenieria-electrica',
        ]);
		
		Lugar::create([
        	'nombre' => 'Departamento de Física',
			'direccion' => 'Calle Morelos No. 126',
			'telefono' => '04260205816',
			'slug' => 'departamento-de-fisica',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento Ciencia de los Materiales',
			'direccion' => 'Av. Morales No. 538',
			'telefono' => '04124910683',
			'slug' => 'departamento-ciencia-de-los-materiales',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento de Ingeniería Metalúrgica',
			'direccion' => 'Av. Reforma No. 587',
			'telefono' => '04127649105',
			'slug' => 'departamento-de-ingenieria-metalurgica',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento de Estadística e Investigación Operativa',
			'direccion' => 'C. Marina Hernandez N. 5',
			'telefono' => '02124591850',
			'slug' => 'departamento-de-estadistica-e-investigacion-operativa',
        ]);
		
		Lugar::create([
        	'nombre' => 'Coordinación de Ingeniería en Informática',
			'direccion' => 'Int. Pasaje Comercial Oficina No. 5',
			'telefono' => '04144810609',
			'slug' => 'coordinacion-de-ingenieria-en-informatica',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Departamento de Construcción e Ingeniería de Fabricación',
			'direccion' => 'Torre Stark Av. 5 Oficina 17',
			'telefono' => '04164917491',
			'slug' => 'departamento-de-construccion-e-ingenieria-de-fabricacion',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Oficina de Psicología',
			'direccion' => 'Edificio Baxter Piso 4 Oficina 5',
			'telefono' => '04163850175',
			'slug' => 'oficina-de-psicologia',
        ]);
		
		 Lugar::create([
        	'nombre' => 'Biblioteca Central',
			'direccion' => 'Av. Titan No. 546',
			'telefono' => '02121385020',
			'slug' => 'biblioteca-central',
        ]);
		
		
		
		
    }
}
