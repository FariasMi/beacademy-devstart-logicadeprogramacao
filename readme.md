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

**Exercício 1**
    
    Faça um algoritmo que receba o nome como entrada e exiba Seja Bem-Vindo [nome]

**Exercício 2**
    
    Faça um algoritmo que receba o nome e endereço e exiba-os na tela

**Exercício 3**
    
    1. Crie um programa que declare 3 variáveis para
    receber o Nome, o peso e a altura de uma pessoa.
    Ao final imprima os dados na tela.

    2. Com base no programa anterior calcule e exiba ao final o 
    Índice de Massa Corpórea(IMC) da pessoa sabendo que a fórmula para o cálculo é:
    IMC = peso/(altura*altura);

    OBS: Insira um comentário na linha em que se
    encontra a fórmula para esclarecer como o cálculo é
    feito. 

**Exercício 4**
    
    Crie um programa que receba o nome e a idade de uma pessoa e exiba:
    1. O nome e a idade informada;
    2. Verdadeiro Se a idade é maior que 18;
    3. Falso se a idade é diferente que 25;
    4. Falso se a idade é diferente que 25 E o nome é igual a Marcos;
    5. Verdadeiro se a idade é diferente que 25 OU o nome é igual a Marcos;
    6. Verdadeiro se a idade dividida por 2 é igual a ZERO;
    
**Exercício 5**
    
    Crie um programa que receba um valor de depósito
    do usuário e atualize o seu saldo. Ao final exiba o
    valor inicial, o depósito e o saldo atual.

**Exercício 6**
    
    Crie um programa que receba o nome e salário
    Se salário maior que 1200, exiba: "Seu salário é maior que o salário mínimo"
    Senão exiba " Seu salário é menor que o salário mínimo"

**Exercício 7**
    
    Crie um programa que receba o nome e salário
    Se salário maior que 1200, exiba: "Seu salário é maior que o salário mínimo"
    Se salário igual a 1200, exiba: "Seu salário é igual ao salário mínimo"
    Senão exiba " Seu salário é menor que o salário mínimo"

**Exercício 8**
    Crie um programa que receba a altura e o peso
    da pessoa e a classifique de acordo com a
    tabela:
    | Valor do IMC     | Classificação     | 
    | :----------------| :-----------------| 
    | IMC < 19         | Abaixo do peso    | 
    | 19 >= IMC < 25   | Peso Normal       | 
    | 25 >= IMC < 30   | Sobrepeso         |
    | 30 >= IMC < 40   | Obesidade tipo 1  |
    | IMC >= 40         | Obesidade Mórbida |

## Referência

 - [Instalação PHP Linux](https://www.edivaldobrito.com.br/como-instalar-o-php-8-no-ubuntu-e-sistemas-derivados/)
 - [Instalação PHP Windows](https://blog.schoolofnet.com/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido/)


