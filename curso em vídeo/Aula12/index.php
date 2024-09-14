<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();
            
            
            
            $m->setPeso(33.5);
            $m->locomover();
            $r->locomover();
            $p->locomover();
            $a->locomover();
            $c->locomover();
            $k->locomover();
            $t->locomover();
            
            $c->emitirSom();
            $k->emitirSom();
            $t->emitirSom();
            
            
            
            
        ?>
    </body>
</html>
