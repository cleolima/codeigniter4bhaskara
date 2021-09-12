<?php

namespace App\Controllers;



class Calculos extends BaseController
{
    public function recebe_dados()
    {
       if(isset($this->request->getPost()['id'])) {
            $id = $this->request->getPost()['id'];
        } else {
            $id = FALSE;
        }

 

        $a = $this->request->getPost()['a'];
        $b = $this->request->getPost()['b'];
        $c = $this->request->getPost()['c'];

 

        $Delta = ($b *$b) - (4 * $a * $c);
        $x1= (- $b + sqrt($Delta)) / (2 * $a);
        $x2= (- $b - sqrt($Delta)) / (2 * $a);

 

        $calcModel = new \App\Models\CalculosModel();
 

        $data = [
        'a' => $a,
        'b' => $b,
        'c' => $c,
        'delta' => $Delta,
        'x1' => $x1,
        'x2' => $x2
        ];

 

        if($id != FALSE) {
        $data['id'] = $id;
        }

 

        $result = $calcModel->save($data);
        var_dump($result);


        
    }

    public function formInsert()
    {
        echo view('create');
    }


    public function List()
    {
        $calcModel = new \App\Models\CalculosModel();
        
        
        $data['tabela'] = $calcModel->find();
        $data['titulo'] = 'Listando todos os campos Bhaskara';

        echo view('list', $data);

        
    }  
    public function Update()
    {
        
        echo view('updateform');
    }

    public function Delete($id)
    {
        $calcModel = new \App\Models\CalculosModel();
        $calcModel ->delete($id);
        
        
        
    }


  
}
