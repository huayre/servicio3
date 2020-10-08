<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable=['codigo_estudiante','curso_id'];
}
