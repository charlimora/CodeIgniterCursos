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

        //es necesario crear la instancia
        $cursito = new Curso();
        $nuevoNombre = '';
        /*apenas recepcionamos el nombre
        $nombre = $this->request->getVar('nombre');
        se va a recepcionar la imagen */
        if($imagen = $this->request->getFile('imagen')){
            //le generamos un nuevo nombre de imagen
            $nuevoNombre = $imagen->getRandomName();
            //movemos al servidor en public
            $imagen->move('..public/uploads',$nuevoNombre);
            
        } //cierro el if de la imagen
        $datos=[
            'nombre'=> $this->request->getVar('nombre'),
            'imagen'=>$nuevoNombre
        ];
        $cursito->insert($datos);
       echo 'Ingresado a la base de datos';
    } //se cierra el método guardar

}