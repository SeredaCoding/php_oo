<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividades Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Mouse.php';  
            require_once 'Caneca.php';
            require_once 'Estudar.php';
            require_once 'TomarCafe.php';
            
            echo '<h3 style="text-align: center;">Mouse</h3><hr>';
            $mouseGamer = new Mouse;
            $mouseGamer->modelo = "Fortrek Warrior";
            $mouseGamer->cor = "Vermelho";
            $mouseGamer->ligado = true;  
            $mouseGamer->movimentar();
            $mouseGamer->scrollCima();
            $mouseGamer->scrollBaixo();
            $mouseGamer->botaoDPress();
            $mouseGamer->botaoEPress();
            
            echo "<br><pre>";
            print_r($mouseGamer);
            echo "</pre><hr>";
            
            echo '<h3 style="text-align: center;">Caneca</h3><hr>';
            $laCanecaDeCafe = new Caneca;
            $laCanecaDeCafe->cor = "Branca";
            $laCanecaDeCafe->material = "Porcelana";
            $laCanecaDeCafe->estado = "Rachada";
            $laCanecaDeCafe->nivel = 60;
            $laCanecaDeCafe->encher();
            $laCanecaDeCafe->esvaziar();
            
            echo "<br><pre>";
            print_r($laCanecaDeCafe);
            echo "</pre><hr>";
            
            echo '<h3 style="text-align: center;">Estudar</h3><hr>';
            
            $estudo1 = new Estudar;
            $estudo1->curso = "POO PHP, Curso em Vídeo, Guanabara";
            $estudo1->dificuldade = "Médio";
            $estudo1->estudando = false;
            $estudo1->estudar();
            $estudo1->atencao = false;
            $estudo1->anotar();
            $estudo1->aprender();
            
            echo "<br><pre>";
            print_r($estudo1);
            echo "</pre><hr>";
            
            echo '<h3 style="text-align: center;">Tomar Café</h3><hr>';
            
            $cafe = new TomarCafe;
            $cafe->cafeFeito = true;
            $cafe->TomarCafe();
            
            echo "<br><pre>";
            print_r($cafe);
            echo "</pre><hr>";
      
        ?>
    </body>
</html>
