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
            require_once "Livro.php";
            require_once "Pessoa.php";

            $p1 = new Pessoa("maria", 29, "F");
            $p2 = new Pessoa("Joao",17, "M");

            $l1 = new Livro("POO em PHP", "Gustavo Guanabara", 300, $p1);
            $l2 = new Livro("JAVA", "Gustavo Scherer", 355, $p2);

            $l1->detalhes();


        ?>
    <pre>
</body>
</html>