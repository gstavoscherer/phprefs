<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculdade</title>
</head>

<body>
    <pre>
        <?php
            require_once "Professor.php";
            require_once "Pessoa.php";
            require_once "Funcionario.php";
            require_once "Aluno.php";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Funcionario();
            $p4 = new Professor();
            
            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Carlos");
            $p4->setNome("Joana");

            $p2->setCurso("Informática");
            $p4->setSalario(2000);
            $p3->setSetor("TI");

            $p2->cancelarMatricula();
            $p4->aumentarSalario(300);
            $p3->mudarTrabalho("Estoque");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>

</html>
