<?php

include_once("Controlador.php");
class Celular implements Controlador
{

    private $modelo;
    private $ligado;
    private $chip;
    private $carga;
    private $volume;
    private $camera;
    private $telefone;

    public function getModelo()
    {
        return $this->modelo;
    }


    public function getLigado()
    {
        return $this->ligado;
    }

    public function getChip()
    {
        return $this->chip;
    }

    public function getCarga()
    {
        return $this->carga;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getCamera()
    {
        return $this->camera;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setLigado($ligado): void
    {
        $this->ligado = $ligado;
    }

    public function setChip($chip): void
    {
        $this->chip = $chip;
    }

    public function setCarga($carga): void
    {
        $this->carga = $carga;
    }

    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

    public function setCamera($camera): void
    {
        $this->camera = $camera;
    }

    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }




    public function __construct($m)
    {
        $this->setModelo($m);
        $this->setLigado(false);
        $this->setChip(false);
        $this->setCarga(100);
        $this->setVolume(0);
        $this->setCamera(false);
        $this->setTelefone(false);
    }

    public function ligar()
    {
        if ($this->getCarga() > 0) {
            $this->setLigado(true);
            echo"<p>Celular ligado com sucesso</p><br>";
        } else {
            echo "<p>Celular sem bateria</p><br>";
        }
    }
    public function desligar()
    {
        if ($this->getLigado() == true){
            $this->setLigado(false);
            $this->setTelefone(false);
            $this->setCamera(false);
            echo"<p>Desligando...</p><br>";
        } else {
            echo"<p>Celular já está desligado</p><br>";
        }
    }
    public function tirarFoto()
    {
        if ($this->getCarga() > 0) {
            if ($this->getLigado() == true){
                if ($this->getCamera() == true){

                    $this->setCarga($this->getCarga() - 25);

                    echo"<p>Diga Xss, tirando foto... Carga diminuida em 25%</p><br>";
                } else {
                    echo"<p>Abra a câmera para tirar a foto</p><br>";
                }
        }
    }
}
    public function colocarChip($c)
    {
        if( $this-> getLigado() == false ){
            $this->setChip(true);
            echo"<p>Chip da operadora ". $c . " colocado com sucesso</p><br>";
    } else {
       echo "<p>Celular ligado, desligue-o para colocar o chip</p><br>";
    }
}
    public function tirarChip()
    {
        if ($this->getLigado() == false){
            $this->setChip(false);
    } else{
        echo"<p>Celular ligado, desligue-o para tirar o chip</p><br>";
    }
}
    public function efetuaLig()
    {
    }
    public function desligaLig()
    {
    }
    public function carregarBateria()
    {
    }
    public function aumentarVolume()
    {
    }
    public function diminuirVolume()
    {
    }
    public function abrirCamera()
    {
        if ($this->getLigado() == true){
           if ($this->getTelefone() == false){
            $this->setCamera(true);
            echo "<p>Câmera aberta com sucesso</p><br>"; 
           } else {
            echo "<p>Feche o telefone antes de abrir a câmera</p><br>";
           }
    } else {
        echo "<p>Celular desligado, impossível abrir a câmera</p><br>";
    }
}
    public function fecharCamera()
    {
        if ($this->getLigado() == true){
            $this->setCamera(false);
            echo "<p>Câmera fechada.</p><br>";
    }
}
    public function abrirTelefone()
    {
        if ($this->getLigado() == true){
            $this->setTelefone(true);
            echo "<p>Telefone aberto com sucesso</p><br>";
    } else {
        echo "<p>Celular desligado, impossível abrir o telefone</p><br>";
    }
}
    public function fecharTelefone()
    {
        if ($this->getLigado() == true){
            $this->setTelefone(false);
            echo "<p>Telefone fechado.</p><br>";
    }
}
    public function abrirMenu(){

    }
}