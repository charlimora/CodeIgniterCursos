<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Curso;
class Cursos extends Controller{

    public function index(){
        return view('cursos/listar');
    }
}