<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
    private $clienteModel;

    public function __construct(){
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        return view('clientes/clientes', [
            'clientes' => $this->clienteModel->findAll()
        ]);
    }

    public function delete($id) {
        if ($this->clienteModel->delete($id)) {
            echo view('messages', [
                'message' => 'Usuario Excluido com Sucesso!'
            ]);
        } else {
            echo "Erro";
        }
    }

    public function create() {

        return view('clientes/form');
    }

    public function store() {
    if ($this->clienteModel->save($this->request->getPost())) {
        return view("messages", [
            'message' => 'Usuario salvo com sucesso'
        ]);
} else {
    echo "Ocorreu um erro";
        }
    }

    public function edit($id) {
        return view('clientes/form', [
            'cliente' => $this->clienteModel->find($id)
        ]);
    }
}