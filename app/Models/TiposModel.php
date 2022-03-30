<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposModel extends Model
{
    use HasFactory;
    protected $table = "tb_tipos";
    protected $primaryKey = "id_tipo";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
