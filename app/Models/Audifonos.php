<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audifonos extends Model
{
    use HasFactory;

    protected $table = 'Audifonos';

    protected $fillable = ['Marca', 'Modelo', 'precio','tipo'];
}