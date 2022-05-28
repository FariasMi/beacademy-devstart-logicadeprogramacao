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
        <input name="nome" placeholder="Digite o seu nome"></br>
        <label for="numero">Número: </label>
        <input name="numero" placeholder="Digite o numero"></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST["nome"];
            $numero = $_POST["numero"];
             
           
            echo "<h1>Olá {$nome}, </h1>"
            ."<h2> A tabuada do {$numero}:</h2>";

            for($i=0; $i<11; $i++){
                echo "<h2>{$numero} x {$i} = ", $numero*$i, "</h2>";    
                
                          
             }  
           
        }