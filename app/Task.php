<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['keep']; // para guardar datos podes agregar mas campos separando por ,
}
