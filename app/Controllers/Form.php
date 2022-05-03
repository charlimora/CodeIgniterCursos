<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller{
    
    public function index(){
        helper(['form']);
        $data =[];

        if($_POST){
            $rules = [
            'email' => 'required|valid_email',
            'miarchivo' => [
                'rules' => 'uploaded[miarchivo]|max_size[miarchivo, 50]|ext_in[miarchivo,png]', //max 50 KB
                'label' => 'El archivo'
                ]
            ];

        if ($this->validate($rules)){
            $archivo = $this->request->getFile('miarchivo');
            echo $archivo->getName();
            exit();

            return redirect()->to('/form/exitoso');
        } else {
            $data['validacion'] = $this->validator;
            }
        }
         
        return view('form', $data);
    }

    function exitoso(){
        return 'Hey, has pasado la validación. Felicitaciones';
    }
}