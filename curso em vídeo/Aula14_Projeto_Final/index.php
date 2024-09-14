<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--<form method="get" action="index.php">
            O número 1<input placeholder="Nº1" name="n1"></input> Somado com: 
            <input placeholder="Nº2" name="n2"></input> É igual a:
            
            <button type="submit">Somar</button>
            <?php
            if(isset($_GET)){
                $soma = $_GET['n1'] + $_GET['n2'];
                echo $soma;
            }
               
            ?>
        </form>-->
        <?php
        
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Vizualizacao.php';
            
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            
            /*echo "<pre>";
            print_r($v);
            echo "</pre>";*/
            
            $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
            $g[1] = new Gafanhoto("Creusa", 19, "F", "Palmito");
            /*echo "<pre>";
            print_r($g);
            echo "</pre>";*/
            
            $vis[0] = new Vizualizacao($g[0],$v[2]);
            $vis[1] = new Vizualizacao($g[0],$v[1]);
            $vis[2] = new Vizualizacao($g[1],$v[1]);
            
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            //$vis[1]
            
            echo "<pre>";
            print_r($vis);
            echo "</pre>";
            
        ?>
    </body>
</html>
