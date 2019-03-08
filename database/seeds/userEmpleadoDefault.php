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
      'name'=>'EMPLEADO_DISATEL',
      'rol' =>'empleado',
      'username'=>'empleado1',
      'password'=>bcrypt('empleadodisatel'),
     
    ]);
    
    

    }
}