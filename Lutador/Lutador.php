<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function getNome()
    {
        return $this->nome;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function setIdade($idade)
    {
        $this->idade = $idade;
    }
    function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    function getPeso()
    {
        return $this->peso;
    }
    function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    function getVitorias()
    {
        return $this->vitorias;
    }
    function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    function getDerrotas()
    {
        return $this->derrotas;
    }
    function getEmpates()
    {
        return $this->empates;
    }
    function setEmpates($empates)
    {
        $this->empates = $empates;
    }
    function apresentar()
    {
        echo "<p>--------------------------------</p>";
        echo "<p>Chegou a hora! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KGS ";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates!!!</p>";
    }
    function status()
    {
        echo "<p>--------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e empatou " . $this->getEmpates() . " vezes!</p>";
    }
    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    function __construct($no, $na, $id, $alt, $pe, $vit, $der, $emp)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $alt;
        $this->setPeso($pe);
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empates = $emp;
    }
}