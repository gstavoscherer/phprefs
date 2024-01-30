<?php

class Pessoa
{

    private $nome;
    private $idade;
    private $sexo;
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

    public function fazerAniver()
    {
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Feliz aniversário " . $this->getNome() . "</p>";
    }

}