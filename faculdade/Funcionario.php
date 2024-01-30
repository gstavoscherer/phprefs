<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;
    public function getSetor()
    {
        return $this->setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setSetor($setor): void
    {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void
    {
        $this->trabalhando = $trabalhando;
    }
    public function mudarTrabalho($trab){
        $this->setSetor($trab);
        echo "<p>Setor mudado para ".$this->getSetor(). "</p>";
    }


}