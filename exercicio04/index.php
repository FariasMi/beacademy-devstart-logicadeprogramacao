<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
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
           
            
            echo
                "<h1>Olá {$nome}</h1>",
                "<h2>Sua Idade é: {$idade}</h2>",
                "<h2>Verdadeiro se Idade é maior que 18:","</br>",var_dump($idade > 18), "</h2>",
                "<h2>Falso se Idade diferente de 25:","</br>",var_dump($idade == 25), "</h2>",
                "<h2>Falso se Idade diferente de 25 E nome igual a Marcos:","</br>",var_dump(($idade == 25) && ($nome="Marcos")), "</h2>",
                "<h2>Verdadeiro se Idade diferente de 25 OU nome igual a Marcos:","</br>",var_dump(($idade !=25)  || ($nome="Marcos")), "</h2>",
                "<h2>Verdadeiro Idade dividido por 2 igual a 0","</br>",var_dump($idade % 2 == 0), "</h2>";
            
        }
    
    ?>
</body>
</html>