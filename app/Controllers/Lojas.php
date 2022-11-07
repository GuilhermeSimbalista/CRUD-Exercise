<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LojasModel;

class Lojas extends BaseController
{
        public function __construct(){
            $this->LojasModel = new LojasModel();
    
        }
    public function index()
        {
            return view('lojas/index', [
                'lojas' => $this->LojasModel->findAll()
            ]);
    }

    public function delete($id) {
        if ($this->LojasModel->delete($id)) {
            echo view('messages', [
                'message' => 'Usuario Excluido com Sucesso!'
            ]);
        } else {
            echo "Erro";
        }
    }

    
    public function create() {

        return view('lojas/form');
    }

    public function store() {
        if ($this->LojasModel->save($this->request->getPost())) {
            return view("messages", [
                'message' => 'Usuario salvo com sucesso'
            ]);
    } else {
        echo "Ocorreu um erro";
            }
        }

        public function edit($id) {
            return view('lojas/form', [
                'loja' => $this->LojasModel->find($id)
            ]);
        }
}
