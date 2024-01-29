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

        $cell1->colocarChip("TIM");
        $cell1->ligar();
        $cell1->abrirTelefone();
        $cell1->abrirCamera();
        $cell1->tirarFoto();
        print_r($cell1);
    ?>
    </pre>
</body>
</html>