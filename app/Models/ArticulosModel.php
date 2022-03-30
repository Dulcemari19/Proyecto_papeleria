<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticulosModel extends Model
{
    use HasFactory;
    protected $table = "tb_articulo";
    protected $primaryKey = "id_articulo";
    protected $fillable = [
        'nombre',
        'des',
        'color',
        'precio',
        'tipo',
        'marca',
        'img',
        'tamaño',
        'id_categoria'
    ];

    public function scopeBuscar($query, $buscar){
        if(trim($buscar) != ""){
            $query->where(\DB::raw('nombre'), "LIKE", "%".$buscar."%");
        }
    }
}
