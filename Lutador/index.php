<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutador</title>
</head>

<body>
    <pre>
        <?php
            include_once("Lutador.php");
            $l = array();
            $l[0] = new Lutador("Josué", "Brasil", 29, 1.71, 90, 3, 2 , 3);
            $l[0]->apresentar();
            $l[0]->status();
        ?>
    </pre>
</body>

</html>