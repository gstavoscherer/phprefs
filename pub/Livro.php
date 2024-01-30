<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $leitor;
    private $pagAtual;
    private $aberto;
    public function __construct($titulo, $autor, $totPaginas, $leitor, $pagAtual, $aberto)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
    }
    public function detalhes()
    {
        echo "Detalhes do Livro:\n";
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Total de Páginas: " . $this->totPaginas . "\n";
        echo "Leitor: " . $this->leitor->getNome() . "\n";
        echo "Página Atual: " . $this->pagAtual . "\n";
        echo "Livro " . ($this->aberto ? "aberto" : "fechado") . "\n";
    }
    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual++;
    }
    public function voltarPag(){
        $this->pagAtual--;
    }
}