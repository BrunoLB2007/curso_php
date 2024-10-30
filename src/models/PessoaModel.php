<?php 

require_once './BaseModel.php';

global $conexao;

class PessoaModel extends BaseModel{

    private $table = "Pessoa";

        private $fields = [
            'nome',
            'sobrenome',
            'nome_completo',
            'email',
            'cpf',
            'cnpj',
            'sexo',
            'tipo_pessoa',
            'estado_civil',
            'data_aniversario',
            'id_usuario',
        ];
        
        public function create ($values){
            $this->createAdjust($this->fields, $values);

            $sql = ("INSERT INTO {$this->table} ({$this->fieldsSTR}) VALUES ({$this->valuesSTR});");

            return $this->execute($sql);
        }

        public function read ($id){
            $this->readAdjust($this->fields);

            // SELECT * FROM Usuario WHERE id = 14;
            $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} WHERE id = {$id} LIMIT 1;");

            return $this->execute($sql);
        }

        public function readALL($page = 20){
            $this->readAdjust($this->fields);

            $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} LIMIT {$page};");
            
            return $this->execute($sql);
        }

        public function update($id, array $values){
            $this->updateAdjust($values);

            $sql = ("UPDATE {$this->table} SET $this->fieldsSTR WHERE id = {$id};");

            return $this->execute($sql);
        }

        public function delete($id){
            $sql = ("DELETE FROM {$this->table} WHERE id = {$id};");

            return $this->execute($sql);
        }

}
