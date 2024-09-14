<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO | Configurando visibilidade de atibutos e métodos</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';   
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            
            echo '<h3>Antes do método:</h3><hr><pre>';
            print_r($c1);
            echo '</pre>';

            $c1->rabiscar();
            $c1->tampar();
            
            echo '<h3>Depois de chamar o método:</h3><hr><pre>';
            print_r($c1);
            echo '</pre><hr>';
            echo '<p>Percebemos assim que o acesso aos atributos pode ser privado ou protegido, porém ao utilizarmos um método que manipula tais atributos, eles são alterados normalmente.</p>';
        ?>
    </body>
</html>
