<?php

class EmpresaDao{
    
    private $conexao;
    
    function __construct($conexao){
        $this->conexao = $conexao;
    }
    
    function listaEmpresas(){
        $query = "select * from empresa";
        $resultado = mysqli_query($this->conexao, $query);
        
        return mysqli_fetch_all($resultado);
    }
    
    function buscarEmpresaContato($empresa_id){
        $query = "select id,nome,razao_social from empresa where id = {$empresa_id}";
        $resultado = mysqli_query($this->conexao, $query);
        $empresaRow = mysqli_fetch_assoc($resultado);
        
        $empresa = new Empresa();
        $empresa->setId($empresa_id);
        $empresa->setNome($empresaRow["nome"]);
        $empresa->setRazao_social($empresaRow["razao_social"]);
        
        return $empresa;
    }
}

?>