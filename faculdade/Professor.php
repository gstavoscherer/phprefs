<?php
require_once "Pessoa.php";
class Professor extends Pessoa
{
    private $especialidade;
    private $salario;
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void
    {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }    public function aumentarSalario($aS){
        $this->setSalario($this->getSalario() + $aS);
        echo "<p>Salário aumentado em " . $aS . " reais</p>";
    }


}