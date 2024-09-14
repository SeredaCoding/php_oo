<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09 - Exercício prático</title>
    </head>
    <body>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $P = [];
        $P[0]= new Pessoa("Mateus", 21, "Masculino");
        //$P[0]->apresentar();
        //$P[0]->fazerAniver();
        
        $livro = [];
        $livro[0] = new Livro("Bolsa Amarela", "Ligia Bonjouga", 314, $P[0]->getNome());
        $livro[0]->detalhesLivro();
        
        echo "<hr>";
        $livro[0]->abrirLivro();
        $livro[0]->folhear(10);
        $livro[0]->detalhesLivro();
        echo "<hr>";
        $livro[0]->fecharLivro();
         $livro[0]->folhear(10);
        
        
        
        $livro[0]->detalhesLivro();
        
        ?>
    </body>
</html>
