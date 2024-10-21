<?php

require '../database/Conexao.php';

class EnderecoModel extends BaseModel{

    private $table = 'endereco';

    private $fields = [
        'rua',
        'bairro',
        'numero',
        'cep',
        'complemento',
        'cidade',
        'estado',
        'id_pessoa',
    ];

    public function create ($values){
        $this->createAdjust($this->fields, $values);

        $sql = ("INSERT INTO {$this->table} ({$this->fieldsSTR}) VALUES ({$this->valuesSTR});");
    }

    public function read ($id){
        $this->readAdjust($this->fields);

        // SELECT * FROM Usuario WHERE id = 14;
        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} WHERE id = {$id} LIMIT 1;");
    }

    public function readALL($page = 20){
        $this->readAdjust($this->fields);

        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} LIMIT {$page};");
    }

    public function update($id, array $values){
        $this->updateAdjust($values);

        $sql = ("UPDATE {$this->table} SET $this->fieldsSTR WHERE id = {$id};");
    }

    public function delete($id){
        $sql = ("DELETE FROM {$this->table} WHERE id = {$id};");
    }

}
