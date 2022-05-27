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
        <input name="nome" placeholder="Digite seu nome"></br>
        <input name="peso" placeholder="Digite seu peso em kg"></br>
        <input name="altura" placeholder="Digite sua altura em metros"></br>
        <button>Enviar</button>
    </form>

    <?php
      
        if($_POST){ 
            
            $nome = $_POST['nome'];
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);
            $imc = $peso/($altura*$altura);
          
           
            if($imc <19):
                echo "<h1>Olá {$nome}, Você está abaixo do peso ideal</h1>";
            elseif($imc >= 19 && $imc < 25):
                echo "<h1>Olá {$nome}, Você está no peso ideal</h1>";
            elseif($imc >= 25 && $imc < 30):
                echo "<h1>Olá {$nome}, Você está com sobrepeso</h1>";                        
            elseif($imc >= 30 && $imc < 40):
                echo "<h1>Olá {$nome}, Você está com obesidade 1 </h1>";                
            else:
                echo "<h1>Olá {$nome}, Você está com obesidade mórbida </h1>";
            endif;
            
            echo
            "<h2>Seu peso é: {$peso} Kg</h2>",
            "<h2>Sua Altura é: {$altura} cm</h2>",
            "<h2>Seu IMC é : {$imc} </h2>";
        
        }
    
    ?>
</body>
</html>