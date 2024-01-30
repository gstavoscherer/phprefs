<?php

require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPag;
    private $aberto;
    private $leitor;
    private $pagAtual;
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getTotPag()
    {
        return $this->totPag;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    public function setTotPag($totPag): void
    {
        $this->totPag = $totPag;
    }

    public function setAberto($aberto): void
    {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void
    {
        $this->leitor = $leitor;
    }
    private function setPagAtual($pagAtual): void
    {
        $this->pagAtual = $pagAtual;
    }
    function __construct($tit, $au, $totpag, $leitor)
    {
        $this->setTitulo($tit);
        $this->setAutor($au);
        $this->setTotPag($totpag);
        $this->setAberto(false);
        $this->setPagAtual(0);
        $this->setLeitor($leitor);
    }
    function abrir()
    {
        $this->setAberto(true);
    }
    function fechar()
    {
        $this->setAberto(false);
    }
    function folhear($p)
    {
        $this->setPagAtual($p);
    }
    function avancarPag()
    {   
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    function voltarPag()
    {
        $this->setPagAtual($this->getPagAtual() - 1);
    }
    function detalhes(){
        echo "<p>------------------------------------</p>";
        echo "<p>Título: ". $this->getTitulo(). "</p>";
        echo "<p>Autor: ".$this->getAutor()."</p>";
        echo "<p>Total de páginas: ". $this->getTotPag(). "</p>";
        echo "<p>Aberto: ". ($this->getAberto()? "sim" : "não" ) ."</p>";
        echo"<p>Leitor: ". $this->getLeitor()->getNome() ."</p>";
    }
}