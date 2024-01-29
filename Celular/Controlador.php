<?php

    interface Controlador{

        public function abrirMenu();
        public function ligar();
        public function desligar();
        public function tirarFoto();
        public function colocarChip($c);
        public function tirarChip();
        public function efetuaLig();
        public function carregarBateria();
        public function mudarVolume($v);
        public function abrirCamera();
        public function fecharCamera();
        public function verificarBateria();
        public function abrirTelefone();
        public function fecharTelefone();

    }