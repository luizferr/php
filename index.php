<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        #formulario {
            align-content: center;
        }
    </style>
</head>

<body>
    <div class="jumbotron ">

        <h1>Exercicio 14</h1>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#1">
            <h3>

                <label for="qst1">Exercício 1 - Faça um programa para ler dois valores inteiros, e depois mostrar
                    na tela a soma desses números com uma mensagem explicativa </label>
            </h3>
            <input type="number" name="n1">
            <input type="number" name="n2">
            <input type="submit" value="Enter">
            <br>
        </form>


        <?php

        //EXE 1
        if (isset($_POST['n1'], $_POST['n2'])) {
            $numero1 = $_POST['n1'];
            $numero2 = $_POST['n2'];

            $soma1 = $numero1 + $numero2;
            printf("A soma dos numeros é: %d", $soma1);
            printf("\n");
        }

        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#2">
            <h3>
                <label for="qst2">Exercício 2 - Faça um programa para ler o valor do raio de um círculo, e depois
                    mostrar o valor da área deste círculo com quatro casas decimais conforme exemplos. </label>
            </h3>
            <input type="number" name="raio">
            <input type="submit" value="Enter">
        </form>

        <?php

        //EXE 2
        if (isset($_POST['raio'])) {
            $raio = $_POST['raio'];
            $area = 3.14 * ($raio * $raio);

            printf("Area do ciruclo: %.4f", $area);
            printf("\n");
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#3">

            <h3>
                <label for="qst3">Exercício 3 - Fazer um programa para ler quatro valores inteiros A, B, C e D. A seguir, calcule e mostre a diferença do produto
                    de A e B pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).</label>
            </h3>
            <input type="number" name="a">
            <input type="number" name="b">
            <input type="number" name="c">
            <input type="number" name="d">
            <input type="submit" value="Enter">
        </form>

        <?php

        //EXE 3
        if (isset($_POST['a'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $d = $_POST['d'];

            $ab = $a * $b;
            $cd = $c * $d;
            $diferenca = $ab - $cd;

            if ($diferenca < 0) {
                $diferenca = $diferenca * (-1);
            }

            printf("Diferença: %d", $diferenca);
            printf("\n");
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#4">
            <h3>
                <label for="qst4">Exercício 4 - Fazer um programa que leia o número de um funcionário, seu número de horas trabalhadas, o valor que recebe por hora e calcula o salário
                    desse funcionário. A seguir, mostre o número e o salário do funcionário, com duas casas decimais.</label>
            </h3>
            <label for="numeroFuncionario">Numero do funcionario: </label>
            <br>
            <input type="number" name="numFuncionario">
            <br>
            <label for="horaFuncionario">Horas trabalhadas: </label>
            <br>
            <input type="number" name="horasTrabalhadas">
            <br>
            <label for="valorHora">Valor da hora: </label>
            <br>
            <input type="number" name="valorHora">

            <input type="submit" value="Enter">
        </form>

        <?php

        //EXE 4
        if (isset($_POST['numFuncionario'], $_POST['horasTrabalhadas'], $_POST['valorHora'],)) {
            $numFuncionario = $_POST['numFuncionario'];
            $horasTrabalhadas = $_POST['horasTrabalhadas'];
            $valorHora = $_POST['valorHora'];

            $salario = $horasTrabalhadas * $valorHora;


            printf("Numero do Funcionario: %d, \n Salario: R$ %d", $numFuncionario, $salario);
            printf("\n");
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#5">
            <h3>
                <label for="qst5">Exercício 5 - Fazer um programa para ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2. Calcule e mostre o valor a ser pago.</label>
            </h3>
            <label for="codigoPeca1">Codigo de peça 1: </label>
            <br>
            <input type="number" name="peca1">
            <br>
            <label for="numeroPeca1">Numero de peças 1: </label>
            <br>
            <input type="number" name="numPecas1">
            <br>
            <label for="valorPeca1">Valor da peça 1: </label>
            <br>
            <input type="number" step=0.01 name="valorPeca1">
            <br>
            <label for="codigoPeca2">Codigo de peças 2: </label>
            <br>
            <input type="number" name="peca2">
            <br>
            <label for="numeroPeca2">Numero de peças 2: </label>
            <br>
            <input type="number" name="numPecas2">
            <br>
            <label for="valorPeca2">Valor da peça 2: </label>
            <br>
            <input type="number" step=0.01 name="valorPeca2">

            <input type="submit" value="Enter">
        </form>

        <?php

        //EXE 5
        if (isset($_POST['valorPeca1'], $_POST['valorPeca2'])) {

            $valorPeca1 = $_POST['valorPeca1'];
            $valorPeca2 = $_POST['valorPeca2'];

            $valorPagar = $valorPeca1 + $valorPeca2;


            printf("Total a pagar: R$ %.2f", $valorPagar);
            printf("\n");
        }
        ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#6">
            <h3>
                <label for="qst6">Exercício 6 - Fazer um programa que leia três valores com ponto flutuante de dupla precisão: A, B e C. Em seguida, calcule e mostre:
                <br> a) a área do triângulo retângulo que tem A por base e C por altura.
                <br> b) a área do círculo de raio C. (pi = 3.14159)
                <br> c) a área do trapézio que tem A e B por bases e C por altura.
                <br> d) a área do quadrado que tem lado B.
                <br> e) a área do retângulo que tem lados A e B.</label>
            </h3>
            <label for="valorA">Valor A: </label>
            <br>
            <input type="number" step=0.01 name="valorA">
            <br>
            <label for="valorB">Valor B: </label>
            <br>
            <input type="number" step=0.01 name="valorB">
            <br>
            <label for="valorC">Valor C: </label>
            <br>
            <input type="number" step=0.01 name="valorC">
            <br>
            <input type="submit" value="Enter">
        </form>
        <?php

        //EXE 6
        if (isset($_POST['valorA'], $_POST['valorB'], $_POST['valorC'])) {
            $valorA = $_POST['valorA'];
            $valorB = $_POST['valorB'];
            $valorC = $_POST['valorC'];



            $areaTriangulo = ($valorA * $valorC) / 2; 
            $circuloRaio = 3.14 * ($valorA * $valorA);
            $trapezio = ($valorA + $valorB) * $valorC /2;
            $areaQuadrado = $valorA * $valorB;
            $areaRetangulo = $valorA * $valorB;


            printf("Triangulo: %.2f ", $areaTriangulo);
            echo "<br>";
            printf("Circulo: %.2f ", $circuloRaio);
            echo "<br>";
            printf("Trapezio: %.2f cm²", $trapezio);
            echo "<br>";
            printf("Quadrado: %.2f cm²", $areaQuadrado);
            echo "<br>";
            printf("Retangulo: %.2f cm²", $areaRetangulo);
            echo "<br>";
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#7">
            <h3>
                <label for="qst7">Exercício 7 - Fazer um programa para ler um número inteiro, e depois dizer se este número é negativo ou não.</label>
            </h3>
            <label for="questao7">Insira um número: </label>
            <br>
            <input type="number" name="questao7">
            <br>
            <input type="submit" value="Enter">
        </form>
        <?php

        //EXE 7
        if (isset($_POST['questao7'],)) {
            $questao7 = $_POST['questao7'];

            if($questao7 < 0){
                echo "Negativo!";
            }
            else {
                echo"Não Negativo!";
            }
        }
        ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#8">
            <h3>
                <label for="qst8">Exercício 8 - Fazer um programa para ler um número inteiro e dizer se este número é par ou ímpar.</label>
            </h3>
            <label for="questao8">Insira um número: </label>
            <br>
            <input type="number" name="questao8">
            <br>
            <input type="submit" value="Enter">
        </form>
        <?php

        //EXE 8
        if (isset($_POST['questao8'])) {
            $questao8 = $_POST['questao8'];
            
            if( $questao8 % 2 ==0){
                echo "Par!";
            }
            else {
                echo"Impar!";
            }
        }
        ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#8">
            <h3>
                <label for="qst8">Exercício 9 - Leia 2 valores inteiros (A e B). Após, o programa deve mostrar uma mensagem "Sao Multiplos" ou "Nao são Multiplos", indicando se os valores lidos são múltiplos entre si. Atenção: os números devem poder ser digitados em ordem crescente ou decrescente.</label>
            </h3>
            <label for="questao9">Insira um número: </label>
            <br>
            <input type="number" name="questao8">
            <br>
            <label for="questao9">Insira outro número: </label>
            <br>
            <input type="number" name="questao82">
            <br>
            <input type="submit" value="Enter">
        </form>
        
        <?php

        //EXE 9
        if (isset($_POST['questao8'], $_POST['questao82'])) {
            $questao8 = $_POST['questao8'];
            $questao82 = $_POST['questao82'];
            
            if( ($questao8 > $questao82) && ($questao8 % $questao82 == 0)){
                echo "São Multiplos!";
            }
            else {
                echo"Não são multiplos!";
            }
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#10">
            <h3>
                <label for="qst10">Exercício 10 - Leia a hora inicial e a hora final de um jogo. A seguir calcule a duração do jogo, sabendo que o mesmo pode começar em um dia e terminar em outro, tendo uma duração mínima de 1 hora e máxima de 24 horas.</label>
            </h3>
            <label for="questao10">Insira a hora incial: </label>
            <br>
            <input type="number" name="horaInicio">
            <br>
            <label for="questao10">Insira a hora do término: </label>
            <br>
            <input type="number" name="horaTermino">
            <br>
            <input type="submit" value="Enter">
        </form>
        <?php

        //EXE 10
        if (isset($_POST['horaInicio'], $_POST['horaTermino'])) {
            $horaInicio = $_POST['horaInicio'];
            $horaTermino = $_POST['horaTermino'];
            
            if($horaInicio > $horaTermino){
                $horasjogadas = 24 - $horaInicio + $horaTermino;
                printf("O jogo durou %d", $horasjogadas);
            }
            else if($horaInicio == 0 && $horaTermino == 0){
                printf("O jogo durou 24 Horas");
            }
            else if($horaInicio < $horaTermino){
               $horasjogadas = $horaTermino -$horaInicio;
                printf("O jogo durou %d Horas", $horasjogadas);
            }
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#11">
            <h3>
                <label for="qst11">Exercício 11 - Com base na tabela abaixo, escreva um programa que leia o código de um item e a quantidade deste item. A seguir, calcule e mostre o valor da conta a pagar.</label>
            </h3>
            <img src="./tabelaAlimentos.png" alt="tabela">
            <br>
            <label for="questao11">Insira o codigo do item: </label>
            <br>
            <input type="number" name="codigoItem">
            <br>
            <label for="questao11">Insira a quantidade: </label>
            <br>
            <input type="number" name="quantItem">
            <br>
            <input type="submit" value="Enter">
        </form>

        <?php

        //EXE 11
        if (isset($_POST['codigoItem'], $_POST['quantItem'])) {
            $codigoItem = $_POST['codigoItem'];
            $quantItem = $_POST['quantItem'];
            
        switch ($codigoItem){ 
            case 1:
                $valoraPagar =  $quantItem * 4;
                printf("Total a pagar R$ %.2f", $valoraPagar );
            break;
            case 2:
                $valoraPagar =  $quantItem * 4.5;
                printf("Total a pagar R$ %.2f", $valoraPagar );
            break;
            case 3:
                $valoraPagar =  $quantItem * 5;
                printf("Total a pagar R$ %.2f", $valoraPagar );
            break;
            case 4:
                $valoraPagar =  $quantItem * 5;
                printf("Total a pagar R$ %.2f", $valoraPagar );
            break;
            case 5:
                $valoraPagar =  $quantItem * 1.5;
                printf("Total a pagar R$ %.2f", $valoraPagar );
            break;
        };
           
        }
        ?>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>#12">
            <h3>
                <label for="qst12">Exercício 12 - Você deve fazer um programa que leia um valor qualquer e apresente uma mensagem dizendo em qual dos seguintes intervalos ([0,25], (25,50], (50,75], (75,100]) este valor se encontra. Obviamente se o valor não estiver em nenhum destes intervalos, deverá ser impressa a mensagem “Fora de intervalo”.</label>
            </h3>
            <label for="questao11">Insira o numero: </label>
            <br>
            <input type="number" name="numIntervalo">
            <br>
            <input type="submit" value="Enter">
        </form>
        <?php

        //EXE 12
        if (isset($_POST['numIntervalo'])) {
            $numIntervalo = $_POST['numIntervalo'];
            
            if($numIntervalo > 0 && $numIntervalo <=25){
                printf("Está no intervalo [0, 25]");
            }
            else if($numIntervalo > 25 && $numIntervalo <=50){
                printf("Está no intervalo [25, 50]");
            }
            else if($numIntervalo > 50 && $numIntervalo <=75){
                printf("Está no intervalo [50, 75]");
            }
            else if($numIntervalo > 75 && $numIntervalo <=100){
                printf("Está no intervalo [75, 100]");
            }
            else {
                printf("Não está dentro dos intervalos");
            }
                
        }
        ?>
    </div>
</body>

</html>