<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Controle Remoto - Aula 6b</title>
    </head>
    <body>
        <h3>Projeto Controle Remoto</h3><hr>
        <?php
            require_once 'ControleRemoto.php';
            $meuControle = new ControleRemoto();
            $meuControle->ligar();
            $meuControle->play();
            $meuControle->abrirMenu();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->abrirMenu();
            $meuControle->ligarMudo();
            $meuControle->abrirMenu();
            $meuControle->desligarMudo();
            $meuControle->abrirMenu();
            
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->pause();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->maisVolume();
            $meuControle->desligar();
        ?>
    </body>
</html>
