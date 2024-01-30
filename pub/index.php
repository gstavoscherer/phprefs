<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação</title>
</head>

<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $p1 = new Pessoa("Maria", 29, "F");
            $l1 = new Livro("Turma da Mônica", "Maurício de Souza", 200,$p1 , 0, false);
            $l1->detalhes();
            $l1->abrir();
            $l1->folhear(80);
            $l1->detalhes();
            $l1->avancarPag();
            $l1->detalhes();
        ?>
</pre>
</body>

</html>