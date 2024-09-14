<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa Principal - Aula 10</title>
    </head>
    <body>
        <?php
        include_once 'Pessoa.php';
        include_once 'Aluno.php';
        include_once 'Funcionario.php';
        include_once 'Professor.php';
        //Programa Principal
        $p = [];
        $p[0] = new Pessoa("Mateus Sereda",21,"Masculino");
        $p[1] = new Aluno("Maria Aliciane",24,"Feminino",true,"Engenharia de Software");
        $p[2] = new Professor("Gustavo Guanabara",100,"Masculino",2500.75,"Ciências da computação");
        $p[3] = new Funcionario("Leonardo Davinci",500,"Masculino","Estoque", true);
        
        echo '<pre>';
        print_r($p);
        echo '</pre>';
        
        ?>
    </body>
</html>
