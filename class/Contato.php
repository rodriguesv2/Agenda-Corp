<?php
class Contato{
    
    private $id;
    private $nome;
    private $usuario;
    private $empresa;
    private $privacidade;
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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * @return mixed
     */
    public function getPrivacidade()
    {
        return $this->privacidade;
    }

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
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @param mixed $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * @param mixed $privacidade
     */
    public function setPrivacidade($privacidade)
    {
        $this->privacidade = $privacidade;
    }

    
    
}
?>