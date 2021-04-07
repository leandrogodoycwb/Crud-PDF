<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class Usuarios extends Controller
{
    public function listaUsuariosPage($id = null) {
        $model = new UsuariosModel();

		$dados = [
			'usuarios'	=> $model->get()->paginate(10),
			'pager'		=> $model->pager
		];

        echo view('Templates/header');
        echo view('Pages/listaUsuario', $dados);
        echo view('Templates/footer');

    }

    public function telaCadastro() {
        helper('form');

        echo view('Templates/header');
        echo view('Pages/cadastrarUsuario');
        echo view('Templates/footer');
    }

    public function insere($id = null) {
        helper('form');
        $model = new UsuariosModel();

        $regras = [
            'nome' => 'required',
            'cpf' => 'required',
            'data' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',

        ];

        if($this->validate($regras)) {
            $model->save([
                'id'=> $this->request->getVar('id'),
                'nome'=> $this->request->getVar('nome'),
                'cpf'=> $this->request->getVar('cpf'),
                'data'=> $this->request->getVar('data'),
                'email'=> $this->request->getVar('email'),
                'telefone'=> $this->request->getVar('telefone'),
                'endereco'=> $this->request->getVar('endereco'),
            ]);

            $this->listaUsuariosPage();  
            
        } else {
            $this->telaCadastro();    
        }


    }

    public function edit($id = null) {
        $model = new UsuariosModel();

        $data['usuarios'] = $model->getUsuarios($id);
        if (empty($data['usuarios'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não foi possível encontrar esse usuário: ' .$id);
        }

        $data = [
            'id' => $data['usuarios']['id'],
            'nome' => $data['usuarios']['nome'],
            'cpf' => $data['usuarios']['cpf'],
            'data' => $data['usuarios']['data'],
            'email' => $data['usuarios']['email'],
            'telefone' => $data['usuarios']['telefone'],
            'endereco' => $data['usuarios']['endereco']
        ];

        echo view('Templates/header');
        echo view('Pages/cadastrarUsuario', $data);
        echo view('Templates/footer');
    }


    public function delete($id = null) {
        $model = new UsuariosModel();
        $model->delete($id); //excluindo um registro

        $this->listaUsuariosPage();
    }

    public function infoUsuario($id = null) {
        $model = new UsuariosModel();
        $data['usuarios'] = $model->getUsuarios($id);

        if (empty($data['usuarios'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nenhum cadastro encontrado');
        }

        $data['nome'] = $data['usuarios']['nome'];
        echo view('Templates/header');
        echo view('Pages/infoUsuario', $data);
        echo view('Templates/footer');

    }

    public function pesquisar() {

    }

    
}
