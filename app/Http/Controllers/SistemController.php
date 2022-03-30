<?php

namespace App\Http\Controllers;

use Auth;                   //libre autentifica y valida 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ValidaRequest;  //libreria de validar

use App\UsuariosModel;
use App\AdmiModel;
use App\Models\ArticulosModel;
use App\TiposModel;
use App\CategoriasModel;
use App\MarcasModel;

class SistemController extends Controller
{
    public function index(){
        return view('index');
    }

public function cero(Request $request){
    
    $articulos = ArticulosModel::Buscar($request->get('buscar'))
            ->orderBy('id_articulos')
            ->paginate(1);

        return view("0-12")
            ->with(['articulos' => $articulos]);
    }
    public function ad(){
        return view('ad');
    }
    public function admi(){
        return view('admi');
    }
    public function cono(){
        return view('cono');
    }
    public function juren(){
        return view('juren');
    }
    public function ta_usu(){
        return view('ta_usu');
    }
    public function térmi(){
        return view('térmi');
    }
    public function secunda(){
        return view('secunda');
    }
   }
