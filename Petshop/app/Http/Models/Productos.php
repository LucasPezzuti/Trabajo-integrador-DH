<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //uso softdelete

class Productos extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'productos'; //mi tabla
    protected $hidden = ['created_at', 'updated_at']; //campos ocultos q no quiiero q se vean en las consultas
}
