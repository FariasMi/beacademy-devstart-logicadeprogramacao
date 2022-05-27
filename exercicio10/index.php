<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
<form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite seu nome"></br>
        <p>Escolha uma opção:</p>
        <input type="checkbox" id="operacao" name="operacao" value="deposito">
        <label for="deposito">Deposito</label><br>
        <input type="checkbox" id="operacao" name="operacao" value="saque">
        <label for="valor">Saque </label></br>
        <label for="valor">Valor: </label>
        <input name="valor" placeholder="Digite um valor"></br></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST["nome"];
            $operacao= $_POST["operacao"];
            $valor = $_POST["valor"];
            $saldo = 100;    
           
            echo "<h1>Olá {$nome}, </h1>",
            "<h2>Seu saldo atual é :{$saldo}</h2>";

            if($operacao == "saque"){
                if($saldo==0 || $saldo < $valor){
                    echo "<h2>Você não possui saldo suficiente para realizar saque: {$saldo}</h2>";                    
                }else{
                    $saldo -= $valor;
                    echo "<h2>Seu saldo com o saque é {$saldo}</h2";
            
                }
            }else{
                $saldo += $valor;
                echo "<h2>Seu saldo com o deposito é {$saldo}</h2>";
            
                 }
                
                  
           
        }