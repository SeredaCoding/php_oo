<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO | Métodos Getter, Setter e Construtor</title>
    </head>
    <body>
        <?php
        include_once 'Caneta.php';
        
        /*$c1 = new Caneta;
        $c1->setModelo("BIC");
        //$c1->modelo = "BIC";
        $c1->setPonta(0.5);
        //$c1->ponta = 0.5;
        echo '<pre>';
        print_r($c1);
        echo '</pre>';*/
        
        //echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        $c2 = new Caneta("BIC", "Azul", 0.5, true);
        echo '<pre>';
        print_r($c2);
        echo '</pre>';
        
        ?>
    </body>
</html>
