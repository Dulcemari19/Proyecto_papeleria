<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ValidaRequest;


use App\Models\UsuariosModel;
use App\Models\AdmiModel;
use App\Models\ArticulosModel;
use App\Models\TiposModel;
use App\Models\CategoriasModel;
use App\Models\MarcasModel;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function validar(Request $request)
    {
        $correo = $request->input('correo');
        $pass = $request->input('pass');
        //dd($request->all());
        $consulta = UsuariosModel::where('email', '=', $correo)
            ->where('pass', '=', $pass)
            ->get();

        if (count($consulta) == 0) {
            return view('login.login');
        } else {
            return view('secunda');
        }
    }

    public function logout(Request $request)
    {
        //-------------- Destrulle las Session --------------
        $request->session()->forget('sesion_id');
        return view('login.login');
    }


    //------------------- Admimistrador -------------------------

    public function loginad()
    {
        return view('login.loginad');
    }

    public function validarad(Request $request)
    {
        $correo = $request->input('correo');
        $pass = $request->input('pass');
        //dd($request->all());
        $consulta = AdmiModel::where('email', '=', $correo)
            ->where('pass', '=', $pass)
            ->get();

        if (count($consulta) == 0) {
            return view('login.loginad');
        } else {
            return view('admi');
        }
    }


    public function logoutad(Request $request)
    {
        //-------------- Destrulle las Session -----------------
        $request->session()->forget('sesion_id');
        return view('login.loginad');
    }

    //-------------------- Agregar ----------------------

    public function nuevo()
    {
        return view("content.nuevo");
    }
    public function guardar(Request $request)
    {


        $usu = UsuariosModel::create(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'direc' => $request->input('direc'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),

        ));

        return redirect()->route('login');
    }


    //--------------------- Agregar/ Usuario/ Admin -----------------

    public function agregar()
    {
        return view("content.agregar");
    }
    public function guardar2(Request $request)
    {

        $usu = UsuariosModel::create(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'direc' => $request->input('direc'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),

        ));

        return redirect()->route('mostrar');
    }

    //---------------- Agregar/ Administrador/ Admin ----------------

    public function agregar2()
    {
        return view("content.agregar2");
    }
    public function guardar3(Request $request)
    {

        $ad = AdmiModel::create(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'direc' => $request->input('direc'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),

        ));

        return redirect()->route('ad');
    }

    //----------------- Agregar/ Administrador/ Articulo -------------

    public function agregar3()
    {
        return view("content.agregar3");
    }


    public function guardar4(Request $request){
        // ----------- Imagen/Archivo ------------
        // ----------- Indicar datos del archivo (file) ------------
            $file = $request->file('img');
        // ----------- Obtener nombre del archivo ------------
            $img = $file->getClientOriginalName();
            //$img = $request->$file('img')->getClientOriginalName();
        // ----------- Crear y obtener fecha y hora para el nombre de archivo (file) ------------    
            $ldate = date('Ymd_His_');
            $img2 = $ldate . $img;
        // ----------- Indicamos donde queremos almacenar el Archivo (file) y con que nombre ------------
            \Storage::disk('local')->put($img2, \File::get($file));
        $articulo = ArticulosModel::create(array(
            'img'=>$img2,
            'nombre'=>$request->input('nombre'),
            'des'=>$request->input('des'),
            'pre'=>$request->input('pre'),
            'tipo'=>$request->input('tipo'),
            'marca'=>$request->input('marca'),
            'categoria'=>$request->input('categoria'),
        ));
            return redirect()->route('mostrar3');
    }


    //------------------------- Mostrar tabla / Usuarios ------------------

    public function mostrar()
    {
        $usuarios = \DB::select('SELECT * FROM tb_usuarios');
        return view('ta_usu')
            ->with(['usuarios' => $usuarios]);
    }

    //-------------------------- Mostrar tabla / Administrador --------------

    public function mostrar2()
    {
        $admi = \DB::select('SELECT * FROM tb_admi');
        return view('ad')
            ->with(['admi' => $admi]);
    }

    //---------------------- Mostrar tabla / Articulos --------------

    public function mostrar3()
    {
        $articulo = \DB::select('SELECT * FROM tb_articulo');
        return view('juren')
            ->with(['articulo' => $articulo]);
    }

    // ----------------------- Esitar Usuario -------------------

    public function editar($id)
    {
        $usu =  UsuariosModel::find($id);
        return view('content.editar')
            ->with(['usu' => $usu]);
    }
    public function salvar(UsuariosModel $id, Request $request)
    {
        $id->update($request->only('nombre', 'apellidos', 'direc', 'tel', 'email', 'pass'));

        return redirect()->route('mostrar', ['id' => $id->id_usuario]);
    }


    //----------------------- Editar Administrador -----------------

    public function editar2($id)
    {
        $ad =  AdmiModel::find($id);
        return view('content.editar2')
            ->with(['ad' => $ad]);
    }
    public function salvar2(AdmiModel $id, Request $request)
    {
        $id->update($request->only('nombre', 'apellidos', 'direc', 'tel', 'email', 'pass'));

        return redirect()->route('mostrar2', ['id' => $id->id_admi]);
    }

    //----------------------------Editar Articulo --------------------

    public function editar3(ArticulosModel $id)
    {
        return view("content.editar3")
            ->with(['articulo' => $id]);
    }

    public function salvar3(ArticulosModel $id, Request $request)
    {

        if ($request->file('img1') != '') {
            // ----------- Imagen/Archivo ------------
            // ----------- Indicar datos del archivo (file) ------------
            $file = $request->file('img1');
            // ----------- Obtener nombre del archivo ------------
            $img = $file->getClientOriginalName();
            //$img = $request->$file('img1')->getClientOriginalName();
            // ----------- Crear y obtener fecha y hora para el nombre de archivo (file) ------------    
            $ldate = date('Ymd_His_');
            $img2 = $ldate . $img;
            // ----------- Indicamos donde queremos almacenar el Archivo (file) y con que nombre ------------
            \Storage::disk('local')->put($img2, \File::get($file));
        } else {
            $img2 = $request->img2;
        }

        $con = ArticulosModel::find($id->id_juguete);
        $con->img = $img2;
        $con->nombre = $request->input('nombre');
        $con->des = $request->input('des');
        $con->pre = $request->input('pre');
        $con->color = $request->input('color');
        $con->tipo = $request->input('tipo');
        $con->marca = $request->input('marca');
        $con->tamaño = $request->input('tamaño');
        $con->categoria = $request->input('categoria');
        $con->save();

        return redirect()->route('mostrar3', ['id' => $id->id_articulo]);
    }

    //------------------------------ Borrar Usuario ----------------------

    public function borrar($id)
    {
        $id = UsuariosModel::find($id);
        $id->delete();
        return redirect()->route('mostrar');
    }

    //------------------------------ Borrar Administrador ------------------

    public function borrar2($id)
    {
        $id = AdmiModel::find($id);
        $id->delete();
        return redirect()->route('mostrar2');
    }

    //----------------------------- Borrar Articulo ----------------

    public function borrar3($id)
    {
        $id = ArticulosModel::find($id);
        $id->delete();
        return redirect()->route('mostrar3');
    }

    //---------------------------  Detalle -------------------------

    public function detalle($id)
    {
        $articulos = ArticulosModel::find($id);
        return view("detalle.detalle")
            ->with(['articulo' => $articulos]);
    }
}
