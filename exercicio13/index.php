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
        <label for="saque">Saque </label></br>
        <input type="checkbox" id="operacao" name="operacao" value="transferencia">
        <label for="transferencia">Transferência</label></br></br>
        <label for="valor">Valor: </label>
        <input name="valor" placeholder="Digite um valor para a operação"></br></br>
        <p>Caso seja uma transferência, por gentileza, informe os campos abaixo</p>
        <label for="banco">Banco: </label>
        <input name="banco" placeholder="Digite o banco"></br>
        <label for="agencia">Agência: </label>
        <input name="agencia" placeholder="Digite a agência"></br>
        <label for="conta">Conta: </label>
        <input name="conta" placeholder="Digite a conta"></br>
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

                 switch ($operacao) {
                    case "saque":
                        if($saldo==0 || $saldo < $valor){
                            echo "<h2>Você não possui saldo suficiente para realizar saque</h2>";                    
                        }else{
                            $saldo -= $valor;
                            echo "<h2>Seu saldo após o saque é {$saldo}</h2";
                        }
                    break;
                    case "deposito":
                        $saldo += $valor;
                        echo "<h2>Seu saldo após o deposito é {$saldo}</h2>";
                         break;
                    case "transferencia":
                        if($saldo==0 || $saldo < $valor){
                            echo "<h2>Você não possui saldo suficiente para realizar a transferência: {$saldo}</h2>";                    
                        }else{
                            $saldo -= $valor;
                            echo 
                            "<h2>Transferência realizada com sucesso para</br>
                            Banco:{$_POST["banco"]}</br>
                            Agencia:{$_POST["agencia"]}</br>
                            Conta:{$_POST["conta"]}</br></h2>
                            <h2>Seu saldo após a transferência é {$saldo}</h2";
                        }
                    break;
                    default:
                         echo "<h2>Escolha inválida</h2>";
                 
                 }          
                          
             }  
           
        