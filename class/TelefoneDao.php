<?php

class TelefoneDao{
    
    private $conexao;
    
    function __construct($conexao){
        $this->conexao = $conexao;
    }
    
    function insereTelefone(Telefone $telefone){
            $query = "insert into telefone (telefone,contato_id) values
                ('{$telefone->getTelefone()}',{$telefone->getContato()})";

        return mysqli_query($this->conexao, $query);
    }
    
    function buscarTelefoneContato($id){
        $query = "select id,telefone,contato_id from telefone where contato_id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        
        $telefone_array = array();
        while($telefoneRow = mysqli_fetch_assoc($resultado)){
            
            $telefone = new Telefone();
            $telefone->setId($telefoneRow["id"]);
            $telefone->setTelefone($telefoneRow["telefone"]);
            $telefone->setContato($telefoneRow["contato_id"]);
            
            array_push($telefone_array, $telefone);
        }
        return $telefone_array;
    }
}

?>