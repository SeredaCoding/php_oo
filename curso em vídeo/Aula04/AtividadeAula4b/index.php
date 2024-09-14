<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividades Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Mouse.php';  
            
            echo '<h3 style="text-align: center;">Mouse</h3><hr>';
            $mouseGamer = new Mouse(
                    "Fortrek Warrior",
                    "Vermelho",
                    true,
                    true,
                    false,
                    false,
                    true,
                    false
                    );
            
            echo "<br><pre>";
            print_r($mouseGamer);
            echo "</pre><hr>";

      
        ?>
    </body>
</html>
