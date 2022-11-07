<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function __construct(){
        $this->ProdutoModel = new ProdutoModel();

    }

    public function index()
    {
        return view('produto/index', [
            'produtos' => $this->ProdutoModel->findAll()
        ]);
    }

    public function delete($id) {
        if ($this->ProdutoModel->delete($id)) {
            echo view('messages', [
                'message' => 'Usuario Excluido com Sucesso!'
            ]);
        } else {
            echo "Erro";
        }
    }

    public function create() {

        return view('produto/form');
    }

    public function store() {
        if ($this->ProdutoModel->save($this->request->getPost())) {
            return view("messages", [
                'message' => 'Usuario salvo com sucesso'
            ]);
    } else {
        echo "Ocorreu um erro";
            }
        }

        public function edit($id) {
            return view('produto/form', [
                'produto' => $this->ProdutoModel->find($id)
            ]);
        }
}
