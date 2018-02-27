<?php

class ContatoDao{
    
    private $conexao;
    
    function __construct($conexao){
        $this->conexao = $conexao;
    }
    
    function listaContato(){
        $query = "select c.id,c.nome,em.nome as empresa,t.numero,e.email from contato c 
            join empresa em on c.empresa_id = em.id 
                join telefone t on t.contato_id = c.id 
                    join email e on e.contato_id = c.id 
                        group by c.nome";
        
        $resultado = mysqli_query($this->conexao, $query);
        return mysqli_fetch_all($resultado);
    }
    
    function insereContato(Contato $contato){
        $query = "insert into contato (nome,usuario_id,privacidade,empresa_id) values
            ('{$contato->getNome()}',{$contato->getUsuario()},
                 '{$contato->getPrivacidade()}',{$contato->getEmpresa()})";
                 
                 return mysqli_query($this->conexao,$query);
    }
}

?>