<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
<form action="" method="post">
        <label for="nome">Nome: </label>
        <input name="nome" placeholder="Digite seu nome"></br>
        <p>Escolha uma das formas geométricas para calcular a área:</p>
        <input type="checkbox" id="forma" name="forma" value="T">
        <label for="triangulo">Triângulo</label><br>
        <input type="checkbox" id="forma" name="forma" value="Q">
        <label for="quadrado">Quadrado</label></br>
        <label for="perimetro">Perímetro: </label>
        <input name="perimetro" placeholder="Digite o perímetro"></br></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST["nome"];
            $forma_geometrica= $_POST["forma"];
            $perimetro = intval($_POST["perimetro"]);
            $resultado = 0;
           
            echo "<h1>Olá {$nome}, </h1>";

            switch ($forma_geometrica) {
                case "T":
                    $perimetro = $perimetro/3;
                    $resultado = $perimetro*$perimetro/2;                    
                    echo "<h2>A área do triângulo equilatero é: {$resultado}</h2>";
                    break;
                case "Q":
                    $perimetro = $perimetro/4;
                    $resultado = $perimetro*$perimetro;                    
                    echo "<h2>A área do quadrado é: {$resultado}</h2>";
                    break;
                case "multiplicacao":
                    $resultado = $valor1 * $valor2;
                    echo "<h2>O resultado da  multiplicação é: {$resultado}</h2>";
                    break;
                default:
                    echo "<h2>Escolha inválida</h2>";
            
            }          
                     
        }