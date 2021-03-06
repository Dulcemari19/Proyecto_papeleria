<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcasModel extends Model
{
    use HasFactory;
    protected $table = "tb_marcas";
    protected $primaryKey = "id_marca";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
