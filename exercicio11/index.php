<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
<form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite seu nome"></br>
        <p>Escolha uma das operações matemáticas:</p>
        <input type="checkbox" id="operacao" name="operacao" value="soma">
        <label for="soma">Soma</label><br>
        <input type="checkbox" id="operacao" name="operacao" value="subtracao">
        <label for="subtracao">Subtração </label></br>
        <input type="checkbox" id="operacao" name="operacao" value="multiplicacao">
        <label for="multiplicacao">Multiplicação </label></br>
        <input type="checkbox" id="operacao" name="operacao" value="divisao">
        <label for="divisao">Divisão </label></br></br>
        <label for="valor1">Valor 1: </label>
        <input name="valor1" placeholder="Digite um número inteiro"></br>
        <label for="valor2">Valor 2: </label>
        <input name="valor2" placeholder="Digite um número inteiro"></br></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST["nome"];
            $operacao= $_POST["operacao"];
            $valor1 = intval($_POST["valor1"]);
            $valor2 = intval($_POST["valor2"]);
            $resultado = 0;
           
                    
            switch ($operacao) {
                case "soma":
                    $resultado = $valor1 + $valor2;
                    echo "<h2>O resultado da soma é: {$resultado}</h2>";
                    break;
                case "subtracao":
                    $resultado = $valor1 - $valor2;
                    echo "<h2>O resultado da subtração é: {$resultado}</h2>";
                    break;
                case "multiplicacao":
                    $resultado = $valor1 * $valor2;
                    echo "<h2>O resultado da  multiplicação é: {$resultado}</h2>";
                    break;
                case "divisao":
                    if($valor1 == 0):
                        echo "<h2>Divisão por 0 não é possível</h2>";
                    else:
                       $resultado = $valor1/ $valor2;
                     echo "<h2>O resultado da divisão é: {$resultado}</h2>";
                    endif;
                break;
                default:
                    echo "<h2>Escolha inválida</h2>";
            
            }          
                     
        }