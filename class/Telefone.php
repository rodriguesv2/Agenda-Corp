<?php
class Telefone{
    
    private $id;
    private $numero;
    private $contato;
     
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param mixed $contato
     */
    public function setContato($contato)
    {
        $this->contato = $contato;
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function getContato()
    {
        return $this->contato;
    }
}
?>