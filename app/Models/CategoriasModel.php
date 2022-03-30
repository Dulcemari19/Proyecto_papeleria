<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    use HasFactory;
    protected $table = "tb_categorias";
    protected $primaryKey = "id_categoria";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
