<?php
class Empresa{
    
    private $id;
    private $nome;
    private $razao_social;
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazao_social($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getRazao_social()
    {
        return $this->razao_social;
    }

}
?>