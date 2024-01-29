<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celular em PHP</title>
</head>
<body>
    <pre>
    <?php
    include_once("Celular.php");
        $cell1 = new Celular("Samsung");
        $cell1->ligar();
        $cell1->abrirMenu();
        $cell1->tirarFoto();
        $cell1->abrirCamera();
        $cell1->tirarFoto();
        $cell1->efetuaLig();
        $cell1->abrirTelefone();
        $cell1->fecharCamera();
        $cell1->abrirTelefone();
        $cell1->efetuaLig();
        $cell1->colocarChip("Claro");
        $cell1->desligar();
        $cell1->colocarChip("Claro");
        $cell1->efetuaLig();
        $cell1->ligar();
        $cell1->efetuaLig();
        $cell1->abrirTelefone();
        $cell1->efetuaLig();
        $cell1->abrirMenu();
        $cell1->desligar();
        $cell1->tirarFoto();
        $cell1->ligar();
        $cell1->abrirCamera();
        $cell1->tirarFoto();
        $cell1->tirarFoto();
        $cell1->carregarBateria();
        $cell1->tirarFoto();
        $cell1->ligar();
        $cell1->abrirCamera();
        $cell1->tirarFoto();   
        $cell1->abrirMenu();  
        $cell1->fecharCamera();   
        $cell1->abrirTelefone();
        $cell1->efetuaLig();
        $cell1->mudarVolume(50);
        $cell1->efetuaLig();
        $cell1->abrirMenu();
    ?>
    </pre>
</body>
</html>