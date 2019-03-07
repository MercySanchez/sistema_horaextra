<?php

use Illuminate\Database\Seeder;

class userAdministradorDefault extends Seeder
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
      'password'=>bcrypt('123456'),
      'username'=>'EMPLEADO_DISATEL',
    ]);
    
    

    }
}