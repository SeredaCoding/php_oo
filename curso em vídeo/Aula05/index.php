<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 5b - Projeto Conta Banco</title>
    </head>
    <body>
        <?php
        include_once 'ContaBanco.php';
        
        $minhaConta = new ContaBanco();
        $minhaConta->abrirConta('CC');
        $minhaConta->setNumConta('000001');
        $minhaConta->setDono('Mateus Sereda');
        $minhaConta->depositar(1000);
        $minhaConta->pagarMensal();
        
        echo '<hr>';
        $amor = new ContaBanco();
        $amor->abrirConta('CP');
        $amor->setNumConta('13405822');
        $amor->setDono('Maria Aliciane');
        $amor->depositar(100000);
        $amor->pagarMensal();
        
        
        
        echo("<hr><h4>Dados bancários de {$minhaConta->getDono()}:</h4><br>");
        echo("<p>Número da conta: {$minhaConta->getNumConta()}</p><br>");
        echo("<p>Tipo: {$minhaConta->getTipo()}</p><br>");
        echo("<p>Status: {$minhaConta->getStringStatus()}</p><br>");
        echo("<p>Saldo: R$ {$minhaConta->getSaldo()}</p><br>");
        
        
        echo("<hr><h4>Dados bancários de {$amor->getDono()}:</h4><br>");
        echo("<p>Número da conta: {$amor->getNumConta()}</p><br>");
        echo("<p>Tipo: {$amor->getTipo()}</p><br>");
        echo("<p>Status: {$amor->getStringStatus()}</p><br>");
        echo("<p>Saldo: R$ {$amor->getSaldo()}</p><br>");
        
        
        
        echo("<hr><h3>Objeto instanciado:</h3><br><pre>");
        print_r($minhaConta);
        echo("</pre><hr>");
        
        echo("<h3>Objeto instanciado:</h3><br><pre>");
        print_r($amor);
        echo("</pre><hr>");
        
        
        ?>
    </body>
</html>
