<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    function getNome()
    {
        return $this->nome;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setIdade($idade)
    {
        $this->idade = $idade;
    }
    function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        echo "Feliz aniversário ". $this->getNome();
    }
}