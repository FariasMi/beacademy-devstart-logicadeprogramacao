# Lógica de programação
Lista de exercícios do módulo de Lógica de Programação proposto pelo programa Devstar.
Devstar é um programa da Paylivre em parceria com a Be academy, afim de capacitar os participantes na linguagem
de programação PHP, além das softskills exigidas pelo mercado.

Os exercícios propostos foram todos feitos em PHP.

## Instalação

Para realizar a execução dos exercícios propostos, se faz necessária a instalação do php.

**Instalação no Linux(Debian/Ubuntu)**


**Passo 1.** Abra um terminal;

**Passo 2.** Instale os seguintes pacotes necessários;
```bash
 sudo apt-get install software-properties-common
```
**Passo 3.** Em seguida, adicione o repositório do software;

```bash
 sudo add-apt-repository ppa:ondrej/php
```

**Passo 4.** Depois disso, atualize o APT;

```bash
sudo apt update
```

**Passo 5.** Instale o PHP 8:
```bash
sudo apt install php8.0
```

**Passo 5.** Verifique se foi instalado corretamente:

*Ao executar este comando o terminal deve exibir a versão do php instalado.*
```bash
php -v
```

**Instalação no Windows**

**Passo 1.** Realize o download do PHP no [site oficial do php](https://www.php.net/downloads.php)

*Recomenda-se a versão 7.1 ou superior*

**Passo 2.** Descompacte o arquivo na sua partição principal e renomeie para php

**Passo 3.** Em seguida, configure as variáveis de ambiente:
* Abra o painel de controle
* Vá em sistema
* Selecione a guia avançado
* clique em Variáveis de ambiente no rodapé da janela
* Na sessão Variáveis do sistema, selecione Path
* Clique em editar
* Em valor da variável, no final do texto ou na última linha acrescente o caminho onde está a pasta php (Ex: C:\php)
* Confirme se é o caminho correto e clique em ok

**Passo 4.** Se faz necessário a configuração do arquivo host para apontar o nome localhost para 127.0.0.1
* Abra o menu iniciar
* com o botão direito do mouse clique em "Executar como administrador" no seu editor de texto
* clique na opção abrir
* no caminho da pasta digite *C:\Windows\System32\drivers\etc.*
* Abra o arquivo *host*, caso não apareça, selecione a opção *Todos os arquivos* 
* Verifique se existe a linha 127.0.0.1 *localhost*
* Caso não exista a linha acima, acrescente-a (caso haja dúvidas consulte a sessão Referência)

**Passo 5.** Abra o seu terminal e digite:

*Ao executar este comando o terminal deve exibir a versão do php instalado.*
```bash
php --version
```

## Exercícios

[Exercicio 1](./exercicio01/index.php) <br>    
    Faça um algoritmo que receba o nome como entrada e exiba Seja Bem-Vindo [nome]


[Exercicio 2](./exercicio02/index.php) <br>    
    Faça um algoritmo que receba o nome e endereço e exiba-os na tela

[Exercicio 3](./exercicio03/index.php) <br>   
    1. Crie um programa que declare 3 variáveis para
    receber o Nome, o peso e a altura de uma pessoa.
    Ao final imprima os dados na tela.

    2. Com base no programa anterior calcule e exiba ao final o 
    Índice de Massa Corpórea(IMC) da pessoa sabendo que a fórmula para o cálculo é:
    IMC = peso/(altura*altura);

    OBS: Insira um comentário na linha em que se
    encontra a fórmula para esclarecer como o cálculo é
    feito. 

[Exercicio 4](./exercicio04/index.php) <br>  
    Crie um programa que receba o nome e a idade de uma pessoa e exiba:
    1. O nome e a idade informada;
    2. Verdadeiro Se a idade é maior que 18;
    3. Falso se a idade é diferente que 25;
    4. Falso se a idade é diferente que 25 E o nome é igual a Marcos;
    5. Verdadeiro se a idade é diferente que 25 OU o nome é igual a Marcos;
    6. Verdadeiro se a idade dividida por 2 é igual a ZERO;
    
[Exercicio 5](./exercicio05/index.php) <br>      
    Crie um programa que receba um valor de depósito
    do usuário e atualize o seu saldo. Ao final exiba o
    valor inicial, o depósito e o saldo atual.

[Exercicio 6](./exercicio06/index.php) <br>      
    Crie um programa que receba o nome e salário
    Se salário maior que 1200, exiba: "Seu salário é maior que o salário mínimo"
    Senão exiba " Seu salário é menor que o salário mínimo"

[Exercicio 7](./exercicio07/index.php) <br>      
    Crie um programa que receba o nome e salário
    Se salário maior que 1200, exiba: "Seu salário é maior que o salário mínimo"
    Se salário igual a 1200, exiba: "Seu salário é igual ao salário mínimo"
    Senão exiba " Seu salário é menor que o salário mínimo"


[Exercicio 8](./exercicio08/index.php) <br>  
    Crie um programa que receba a altura e o peso
    da pessoa e a classifique de acordo com a
    tabela:

| Valor do IMC     | Classificação     | 
| :----------------| :-----------------| 
| IMC < 19         | Abaixo do peso    | 
| 19 <= IMC < 25   | Peso Normal       | 
| 25 <= IMC < 30   | Sobrepeso         |
| 30 <= IMC < 40   | Obesidade tipo 1  |
| IMC >= 40        | Obesidade Mórbida |

[Exercicio 9](./exercicio09/index.php) <br>  
    Crie um programa que receba a idade da
    pessoa e a classifique de acordo com a tabela:

| Idade                     | Classificação          | 
| :-------------------------| :----------------------| 
| Menos de 18 anos          | Menor de idade         | 
| Maior que 18 menor que 60 | Adulto                 | 
| Mais que 60               | Idoso                  |


[Exercicio 10](./exercicio10/index.php) <br>  
    Crie um programa que permita ao usuário escolher a
    operação a realizar (depósito ou saque), receba a
    informação da operação escolhida e o valor do
    usuário e, em seguida, atualize o seu saldo. Ao final
    exiba o valor inicial, a operação realizada e o saldo
    atual.



[Exercicio 11](./exercicio11/index.php) <br>  

    Crie um programa que solicite ao usuário a
    operação desejada e implemente as quatro
    operações matemáticas (soma, subtração,
    multiplicação e divisão)

[Exercicio 12](./exercicio12/index.php) <br>  

    Crie um programa que receba do usuário a
    figura geométrica que deseja calcular a área e
    o perímetro (Q-Quadrado ou T-Triângulo) e
    calcule e exiba a área e o perímetro da figura
    escolhida.

[Exercicio 13](./exercicio13/index.php)<br>  

    Crie um programa que, utilizando a estrutura escolha
    caso, permita ao usuário escolher a operação a
    realizar (depósito ou saque ou transferência) , caso a
    operação seja de transferência solicite o nome do
    banco, da agência e conta, receba as informações e,
    em ao final exiba o valor inicial, a operação realizada
    e o saldo atual, no caso de transferência exiba
    também os dados do banco, agência e conta.


**Exercício 14**

    Crie um programa que receba do usuário um
    número e apresente a Tabuada deste.

**Exercício 15**

    Crie um programa que apresente os múltiplos
    de dois entre 0 e 100.

**Exercício 16**

    Crie um programa que imprima os múltiplos
    de 3 entre dois números digitados pelo
    usuário.

**Exercício 17**
    Crie um programa que, imprima a tabuada de um
    número digitado pelo usuário.


**Exercício 18**
    Crie um programa que solicite ao usuário o seu
    nome e senha do cartão e valide se a senha e
    nome são corretos (Nome: Marcos e senha:
    paylivre) e, caso positivo, dê boas vindas ao
    usuário e, em caso negativo, solicite os dados
    novamente.

**Exercício 19**
    Crie um programa que realize as 4 operações
    matemática a partir de dois números que serão
    digitados pelo usuário. Após isto imprima os
    valores na tela e em seguida pergunte se ele quer
    realizar novo cálculo, repetido as operações
    enquanto o usuário desejar continuar.


**Exercício 20**
    Crie um programa que permita ao usuário escolher a
    operação a realizar:
    1. Depósito;
    2. Saque;
    3. Transferência;
    4. Empréstimo;
    Em seguida solicite os dados para concretizar a
    operação e imprima o nome da operação feita e os
    dados referentes a ela. Exemplo:
    Depósito no Banco BOM agencia: 12-3 conta 1234-5
    para Marcos Monteiro. Saldo inicial: R$ 1000,00
    Depósito: R$500,00 Saldo final: R$ 1500,00.
    O programa deverá permitir ao usuário realizar
    quantas operações ele desejar, implemente a solução
    utilizando a estrutura enquanto.

**Exercício 21**
    Crie um programa que permita ao usuário tentar logar
    em seu Sistema informando seu nome e senha. Repita a
    operação até que o nome e senha correspondam a um
    valor armazenado(Marcos – 1234). Caso o usuário
    digite -1 interrompa a repetição e informe que o
    programa será finalizado por solicitação do usuário.

**Exercício 22**
    Solicitar a idade de várias pessoas e imprimir:
    • Total de pessoas com menos de 18 anos.
    • Total de pessoas com mais de 60 anos.
    • O programa termina quando idade for =-99.

**Exercício 23**
    Apresentar o total da soma obtida dos cem primeiros
    números inteiros.

**Exercício 24**
    Crie um programa inicie o saldo do cliente com R$
    1000,00 e que permita o saques consecutivos no valor
    de R$ 150.00 até que seu saldo seja positivo.

    Quando isto ocorrer interrompa a operação e informe
    que o saque não pode ser efetuado em razão de que o
    saldo era insuficiente para efetuar a operação


**Exercício 25**
    Faça um programa que solicite ao usuário o
    nome e o preço de 10 produtos e armazene-os
    em um vetor. Ao final imprima o nome e os
    valores correspondentes dos produtos.

**Exercício 26**
    Crie um programa que permita cadastrar os
    seguintes dados de um Aluno: Nome, nota1 e
    nota2. Receba estes valores em vetores e
    calcule e exiba ao final todos os dados e a
    informação se o aluno foi aprovado(media
    maior ou igual a 6) ou reprovado(media
    inferior a 6).
    
**Exercício 27**
    Crie um programa que permita ao usuário
    cadastrar 5 clientes com os seguintes dados:
    • Nome;
    • CPF;
    • RG;
    • Endereço; e
    • Telefone.

    Guarde os dados dos clientes em um vetor e
    o final exiba-os.

**Exercício 28**
    Faça um programa para calcular a área e o perímetro
    de um círculo. O usuário deve informar o valor do
    raio do círculo. Caso o raio seja um valor negativo,
    deve-se informar uma mensagem de erro e solicitar
    ao usuário que informe um novo valor. Utilize o valor
    de 3,1416 para p (pi). Área = PI*Raio*Raio
    Perímetro = 2*PI*Raio. Exiba ao final o valor do raio
    e o perímetro e a área.

**Exercício 29** 
    Faça um programa para calcular o valor de cada
    parcela de um financiamento a ser escolhido pelo
    usuário. A parcela será formada pelas seguintes regra:
    •Caso o usuário escolha 2 parcelas os juros serão de 2%
    ao mês;
    •Caso o usuário escolha 3 parcelas os juros serão de 3%
    ao mês;
    • Ao final imprima o valor financiado, o total de
    paracelas e o valor de cada parcela.

 - [Instalação PHP Linux](https://www.edivaldobrito.com.br/como-instalar-o-php-8-no-ubuntu-e-sistemas-derivados/)
 - [Instalação PHP Windows](https://blog.schoolofnet.com/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido/)


