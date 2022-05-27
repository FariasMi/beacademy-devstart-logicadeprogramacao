<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <h1>Banco</h1>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite seu nome"></br>
        <label for="salario">Salário: </label>
        <input name="salario" placeholder="Digite o seu salário"></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            $nome= $_POST['nome'];
            $salario = floatval($_POST['salario']);
            
            echo "<h1>Olá {$nome}</h1>";
            if($salario > 1200){
                echo "<h2>{$nome}, seu salário é maior que o salário mínimo!!!</h2>";
            }else{
                if($salario = 1200){
                    echo "<h2>{$nome}, seu salário é igual ao salário mínimo!!!</h2>";
                }else{
                    echo "<h2>{$nome}, seu salário é menor que o salário mínimo!!!</h2>";
                }
            }
        }    
    ?>
</body>
</html>