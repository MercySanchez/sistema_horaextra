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
      'name'=>'empleadoprueba',
      'rol' =>'empleado',
      'password'=>bcrypt('123456'),
      'username'=>'EMPLEADO_DISATEL',
    ]);
    
    DB::table('users')->insert(['name'=>'empleadoprueba2',
                                'rol' =>'empleado',
                                'username'=>'EMPLEADO_DISATEL',
                                'password'=>bcrypt('123456')
                                
  ]);

    }
}