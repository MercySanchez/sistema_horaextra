<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	public $timestamps = false;
    protected $table = 'departamentos';
    protected $primaryKey = 'idDepartamento';
}
