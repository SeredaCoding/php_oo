<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Ultra Emoji Combat</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            //------------- Lutadores -------------
            $l = []; 
            $l[0] = new Lutador("Pretty Boy" ,"França" ,31 , 1.75, 68.9, 11, 3, 1,);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            $l[6] = new Lutador("Magrelão", "Africa", 20, 1.90, 45, 0, 0, 10);
            
            //------------- Lutas ----------------
            $UEC = [];
            $UEC[0] = new Luta();
            $UEC[0]->marcarLuta($l[0],$l[1]);
            $UEC[0]->Lutar();

            $UEC[1] = new Luta();
            $UEC[1]->marcarLuta($l[0],$l[6]);
            $UEC[1]->Lutar();
            
            $l[6]->apresentar();
            
            
            
        ?>
    </body>
</html>
