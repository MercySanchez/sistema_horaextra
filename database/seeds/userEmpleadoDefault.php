<?php

use Illuminate\Database\Seeder;

class userEmpleadoDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    App\User::create([
      'nombreEmpleado'=>'Juan perez',
      'rol' =>0, //0 -empleado, 1-Administrador, 2-Gerente
      'username'=>'jperez2',
      'password'=>bcrypt('empleadodisatel'),
      'idDepartamento' => 1    
    ]);
    
    

    }
}