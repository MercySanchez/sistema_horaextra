<?php

use Illuminate\Database\Seeder;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departamento::create([
      'nombreDepartamento'=>'Ventas',
      'descripcionDepartamento' => 'Departamento de ventas'   
    ]);
      	 
    }
}
