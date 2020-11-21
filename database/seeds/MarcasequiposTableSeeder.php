<?php

use Illuminate\Database\Seeder;
use SistemaInventario\Marcasequipo;

class MarcasequiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marcasequipo::create([
        	'nombre' => 'Dell',
			'modelo' => 'WM116T',
			'slug' => 'dell',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Extreme',
			'modelo' => 'Rocket M5',
			'slug' => 'extreme',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Apple',
			'modelo' => 'A1862',
			'slug' => 'apple',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Epson',
			'modelo' => 'J26H006',
			'slug' => 'epson',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Intel',
			'modelo' => '9462D2W',
			'slug' => 'intel',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Samsung',
			'modelo' => 'TM1710A',
			'slug' => 'samsung',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'LG',
			'modelo' => 'WC500B15',
			'slug' => 'lg',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'HP',
			'modelo' => 'HA P001D',
			'slug' => 'hp',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Canon',
			'modelo' => 'MF525dw',
			'slug' => 'canon',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Lenovo',
			'modelo' => 'TB-7104F',
			'slug' => 'lenovo',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Genius',
			'modelo' => 'HS-04A',
			'slug' => 'genius',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Sony',
			'modelo' => 'MDR-ZX770BN',
			'slug' => 'sony',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'IBM',
			'modelo' => 'SK-8808',
			'slug' => 'ibm',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Cisco',
			'modelo' => 'AIR-BR1310G-x-K9-(R)',
			'slug' => 'cisco',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Panasonic',
			'modelo' => 'EB-A101',
			'slug' => 'panasonic',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Microsoft',
			'modelo' => '1459',
			'slug' => 'microsoft',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Acer',
			'modelo' => 'K242HQL',
			'slug' => 'acer',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Toshiba',
			'modelo' => 'PRO A50-C-1RV',
			'slug' => 'toshiba',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Asus',
			'modelo' => 'UX305FA',
			'slug' => 'asus',
        ]);
		
		Marcasequipo::create([
        	'nombre' => 'Wacom Intous',
			'modelo' => 'PTH-851',
			'slug' => 'wacom-intous',
        ]);
    }
}
