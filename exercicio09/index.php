<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
<form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite seu nome"></br>
        <label for="idade">Idade: </label>
        <input name="idade" placeholder="Digite sua idade"></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST['nome'];
            $idade= intval($_POST['idade']);
          
           
            if($idade < 18):
                echo "<h1>Olá {$nome}, Você é menor de idade!</h1>";
            elseif($idade >= 18 && $idade < 60):
                echo "<h1>Olá {$nome}, Você é um adulto, bora pagar os boletos!</h1>";
            else:
                echo "<h1>Olá {$nome}, Você é um idoso, bora aposentar!</h1>";                
            endif;
            
           
        }