<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h1>Banco</h1>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite um valor de deposito"></br>
        <label for="deposito">Depósito: </label>
        <input name="deposito" placeholder="Digite um valor de deposito"></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            $saldo = 0.00;
            echo "<h1>Olá {$nome}</h1>",           
                 "<h2>O seu saldo antes do depósito \R$\:  {$saldo}</h2>";

            $deposito= floatval($_POST['deposito']);
            $saldo = $saldo + $deposito;            
            echo "<h2>O seu saldo após do depósito {$saldo}</h2>";
                 
        }
    
    ?>
</body>
</html>