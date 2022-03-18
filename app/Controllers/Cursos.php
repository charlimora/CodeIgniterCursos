<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Curso;
class Cursos extends Controller{

    public function index(){

        //se crea el objeto de clase Curso
        $curso = new Curso();
        /*se crea un array e indico que se orden la información por id y en forma ascedente
        y que se busquen todos los registros. Todo se va a depositar en $datos[]*/
        $datos['cursos'] = $curso->orderBy('id', 'ASC')->findAll();
        /*llamo a la cabecera y al pie de página desde el controlador y asignándolo también a datos
        recordar que $datos es un array pero almacenamos en sus diferentes
        posiciones indexadas con los nombres cursos, cabecera y pie*/
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('cursos/listar',$datos);
    }

    public function crear(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('cursos/crear',$datos);
    }

    public function guardar(){

        $nombre = $this->request->getVar('nombre');
        print_r($nombre);
    }

}