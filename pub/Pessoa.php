<?php
class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }


    function __construct($no, $id, $se)
    {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        echo "Parabéns!! " . $this->getNome() . " fez " . $this->getIdade() . " anos!!";
    }


}