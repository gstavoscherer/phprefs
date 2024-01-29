<?php

    interface Controlador{

        public function abrirMenu();
        public function ligar();
        public function desligar();
        public function tirarFoto();
        public function colocarChip($c);
        public function tirarChip();
        public function efetuaLig();
        public function desligaLig();
        public function carregarBateria();
        public function aumentarVolume();
        public function diminuirVolume();
        public function abrirCamera();
        public function fecharCamera();
        public function abrirTelefone();
        public function fecharTelefone();

    }