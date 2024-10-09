<?php 

require_once './src/Conexao.php';

global $conexao;

class PessoaModels{
    private $fields = [

        'id',
        'nome',
        'sobrenome',
        'nome_completo',
        'excluido',
        'email',
        'cpf',
        'cnpj',
        'sexo',
        'tipo_pessoa',
        'estado_civil',
        'data_aniversario',
        'id_usuario',
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
