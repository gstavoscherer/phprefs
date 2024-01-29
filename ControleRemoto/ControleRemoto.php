<?php
include_once("Controller.php");
class ControleRemoto implements Controller
{

    private $volume;
    private $ligado;
    private $tocando;


    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }
    private function getVolume()
    {
        return $this->volume;
    }
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }
    private function getTocando()
    {
        return $this->tocando;
    }
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<p>Está ligado? : " . ($this->getLigado() ? "SIM" : "NÃO") . "</p>";
        echo "<p>Está tocando? : " . ($this->getTocando() ? "SIM" : "NÃO") . "</p>";
        echo "<p>Volume : " . ($this->getVolume()) . "</p>";
    }
    public function fecharMenu()
    {
        echo "<p> Fechando menu...</p>";
    }
    public function maisVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "Não é possível aumentar o volume, dispositivo desligado";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "Não é possível diminuir volume, dispositivo desligado";
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() == true) {
            $this->setVolume(0);
        } else {
            echo "Não é possível ligar o mudo, dispositivo desligado";
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() == true) {
            $this->setVolume(50);
        } else {
            echo "Não é possível desligar o mudo, dispositivo desligado";
        }
    }
    public function play()
    {
        if ($this->getLigado() == true) {
            $this->setTocando(true);
        } else {
            echo "Não é possível dar play, dispositivo desligado";
        }
    }
    public function pause()
    {
        if ($this->getLigado() == true) {
            $this->setTocando(false);
        } else {
            echo "Não é possível dar pause, dispositivo desligado";
        }
    }
}