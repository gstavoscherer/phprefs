<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        include_once("ControleRemoto.php");
        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->maisVolume();
        $c1->play();
        $c1->abrirMenu();
        ?>
    </pre>
</body>
</html>