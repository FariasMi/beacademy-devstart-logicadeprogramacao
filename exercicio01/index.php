<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <form action="" method="post">
        <input name="nome" placeholder="Digite seu nome"></br>
        <button>Enviar</button>
    </form>

    <?php
        if($_POST){
            echo "<h1>Seja Bem vindo(a) ".$_POST['nome']."!</h1>";
        }
        
    ?>
</body>
</html>