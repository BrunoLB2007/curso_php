<?php 

require_once './src/Conexao.php';

global $conexao;

class UsuarioModels{
    private $fields = [

        'id',
        'cpf',
        'email',
        'senha',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data-atualizacao',
    ];
    
    public function create (){

    }

    public function read ($id){

    }

    public function readALL(){

    }

    public function update($id){

    }

    public function delete($id){

    }

}
