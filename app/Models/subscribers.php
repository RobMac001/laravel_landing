<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribers extends Model
{
   use HasFactory;
   public $timestamps = false;
      protected $table = 'subscribers';
    protected $fillable = ['nombre',
'apellidos',
'email',
'telefono',
'mensaje',
'asunto',
'web',
'sector',
'pais',
'presupuesto',
'objetivo',
'problema_actual',
'otros_objetivo',
'publico',
'competencia',
'metas',
'informacion_adicional'
];

}
