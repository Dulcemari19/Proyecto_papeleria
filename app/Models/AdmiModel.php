<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmiModel extends Model
{
    use HasFactory;
    protected $table = "tb_admi";
    protected $primaryKey = "id_admi";
    protected $fillable = [
        'nombre',
        'apellidos',
        'direc',
        'tel',
        'email',
        'pass'
    ];
}
