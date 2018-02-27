<?php

class EmailDao{
    
    private $conexao;
    
    function __construct($conexao){
        $this->conexao = $conexao;
    }
    
    function insereEmail(Email $email){
            $query = "insert into email (email,contato_id) values
                ('{$email->getemail()}',{$email->getContato()})";
        
        return mysqli_query($this->conexao, $query);
    }
}
 ?>