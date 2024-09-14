<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';
            //$p1 = new Pessoa(); - Classe abstrata não pode ser instanciada
            /*$v1 = new Visitante();
            $v1->setNome('Mateus');
            $v1->setIdade(21);
            $v1->setSexo('Masculino');
            echo '<pre>';
            print_r($v1);
            echo '</pre>';*/
            $a1 = new Aluno;
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso('Informática');
            $a1->PagarMensalidade();
            echo '<pre>';
            print_r($a1);
            echo '</pre>';
            
            $b1 = new Bolsista;
            $b1->setMatricula(1112);
            $b1->setNome('Epaminondas');
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->PagarMensalidade();
            echo '<pre>';
            print_r($b1);
            echo '</pre>';
            
            $p1 = new Professor;
            $p1->setNome("Gustavo Guanabara");
            $p1->setIdade(100);
            $p1->setSexo("M");
            $p1->setSalario(2000);
            $p1->setEspecialidade("Programação");
            $p1->receberAumento(1000);
            echo '<pre>';
            print_r($p1);
            echo '</pre>';
            
            $t1 = new Tecnico();
            $t1->setNome("Pablo");
            $t1->setIdade(18);
            $t1->setSexo("M");
            $t1->setCurso("Programação");
            $t1->praticar();
            echo '<pre>';
            print_r($t1);
            echo '</pre>';
        ?>
    </body>
</html>
