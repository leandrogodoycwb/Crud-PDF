<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model {

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome', 'cpf' , 'data', 'email', 'telefone', 'endereco'];

    public function getUsuarios($id = null) {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['id' => $id])->first();
    }

    public function get(){             
        return $this;
    }

}

?>
