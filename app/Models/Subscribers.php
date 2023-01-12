<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;
    public $timestamps = false;
      protected $table = 'subscribers';
    protected $fillable = ['nombre',
'apellidos',
'email',
'telefono',
'mensaje',
'asunto'
];
}
