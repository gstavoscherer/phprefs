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
        $l[0] = new Lutador("Josué", "Brasil", 29, 1.71, 90, 3, 2, 3);
        $l[1] = new Lutador("DeadBody", "EUA", 28, 1.93, 81.6, 13, 0, 2);
        $l[2] = new Lutador("Jean Pierre", "França", 21, 1.80, 105.7, 12, 2, 4);
        $l[3] = new Lutador("Carlos", "Espanha", 25, 1.78, 66, 10, 5, 4);

        ?>
    </pre>
</body>

</html>