<?php
    echo "1. Faça um programa que exiba na tela “Use máscara!”.<br>";
        echo " Use máscara!";
        echo "<br>";
        echo "<br>";

    echo "2. Faça um programa que exiba na tela “2021”. <br>";
        echo "2021";
        echo "<br>";
        echo "<br>";

    echo "3. Faça um programa que exiba na tela o seu nome, sua turma e a data. <br>";
        echo "Luiz Fernando, TII2001M, 28/08/2021";
        echo "<br>";
        echo "<br>";

    echo "4. Crie uma variável para receber seu nome e a data do seu nascimento como
     valores. Exiba uma mensagem concatenando os valores das variáveis. <br>";
        $nome = "- Luiz Fernando";
        $data_nascimento = "12/06/1998";

        echo " Meu nome é: " .$nome. "<br>  Minha data de nascimento é: " .$data_nascimento;
        echo "<br>";
        echo "<br>";

    echo "5. Faça um programa que informe o nome e idade de todos os integrantes da
    sua casa. Depois exiba a soma das idades. <br>";
        echo "Mãe, idade 63 <br>";
        echo "Irmã, idade 28 <br>";
        echo "Tia, idade 57 <br>";
        echo "Eu, idade 23 <br>";
        $idades = [63, 28, 57, 23];
        $idadeTotal = 0;
        foreach($idades as $idade){
            $idadeTotal += $idade;
        }
        echo "Idades totais: " .$idadeTotal;
        echo "<br>";
        echo "<br>";
    
    echo "6. Procure na internet um conversor de moeda. Escreva um programa que
    // converta sua mesada de reais para dólar. <br>";
        $valorReais = 100;
        $cotacaoDolar = 5.25;

        printf("%u reais em dolares = %.2f",$valorReais, $valorReais/$cotacaoDolar);
        echo "<br>";
        echo "<br>";

   
    
    echo "7. Continuando o programa anterior. Se sua mesada em dólares for maior que
     US$ 100,00 escreva 'Vou comprar bitcoin'. Se for maior que US$ 200,00
     escreva 'Vou investir no tesouro nacional'. Se for menor que U$100,00 escreva
     'Vou comprar bala'. <br>";

    $valorDolar = $valorReais/$cotacaoDolar;
    if($valorDolar > 100){
        echo "Vou comprar bitcoin";
    }
    else if ($valorDolar > 200) {
        echo "Vou investir no tesouro nacional";
    }
    else if ($valorDolar < 100){
        echo "Vou comprar bala.";
    }
    echo "<br>";
    echo "<br>";


    echo " 8. Faça um programa que converta Fahrenheit em Celsius. Sabendo que a
     formula é C = (F – 32) / 1.8 e escreva na tela a temperatura em graus Celsius e
     em Fahrenheit. <br>";

    $F = 55;
    $C = ($F - 32) /1.8;

    echo "Celsius: " .round($C, 2). " Fahrenheit: " .$F;

    echo "<br>";
    echo "<br>";

    echo "9. Escreva um programa para ler o salário mensal atual de um funcionário e o
     percentual de reajuste de 6%. Calcular e escrever o valor do novo salário.
    <br>";
?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salario" id="salarioId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['salario'])){
        $salario = $_POST['salario'];

        $reajuste = $salario + $salario * 0.06;
        $reajuste = floor($reajuste);
    
        printf("Salario com reajuste = %.2f",$reajuste); 

        printf("\n");
    }
    echo "<br>";
    echo "<br> 10. Faça um programa que receba um valor que foi depositado e exiba o valor
    com rendimento após um mês. Considere fixo o juro da poupança em 0,049%
    a. m. <br>";
?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu deposito:</p>
        <input type="number" name="deposito" id="depositoid">
        <button type="submit">Deposite</button>
    </form>
<?php
    if(isset($_POST['deposito'])) {
        $deposito = $_POST['deposito'];

        $rendimento =  $deposito * 0.049;
        $rendimento = floor($rendimento);
    
        printf("Rendimento = %.2f",$rendimento); 
    }

    echo "<br>";
    echo "<br>";
    echo "11. Escreva um programa para ler o nome e a idade de uma pessoa, e exibir
    quantos dias de vida ela possui. Considere sempre anos completos, e que um
    ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida;
    veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS. <br>";

?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite sua idade:</p>
        <input type="number" name="idade" id="idadeid">
        <button type="submit">calcular</button>
    </form>
<?php
    if(isset($_POST['idade'])) {
        $idade = $_POST['idade'];

        $diasVida = $idade * 365;
        $diasVida = floor($diasVida);
    
        printf("Idade em dias = %.2f",$diasVida); 
    }


    echo "<br>";
    echo "<br>";
    echo "12. Escreva um programa para ler o número total de eleitores de um município,
    o número de votos brancos, nulos e válidos. Calcular e escrever o percentual
    que cada um representa em relação ao total de eleitores.<br>";

    ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>eleitores:</p>
        <input type="number" name="eleitores" id="eleitoresid">
        <p>votos em branco:</p>
        <input type="number" name="votoBranco" id="brancoid">
        <p>votos nulos:</p>
        <input type="number" name="votoNulo" id="nuloid">
        <p>votos válidos:</p>
        <input type="number" name="votoValido" id="validosid">
        <button type="submit">enter</button>
    </form>
<?php
    

    if(isset($_POST['eleitores'], $_POST['votoBranco'], $_POST['votoNulo'], $_POST['votoValido'])) {
        
        $eleitores = $_POST['eleitores'];

        $votoBranco = $_POST['votoBranco'];
        $votoBranco = ($votoBranco / $eleitores) * 100; 

        $votoNulo = $_POST['votoNulo'];
        $votoNulo = ($votoNulo / $eleitores) * 100; 

        $votoValido = $_POST['votoValido'];
        $votoValido = ($votoValido / $eleitores) * 100; 

        printf("Votos brancos = %.2f%%, <br> Votos nulos = %.2f%%, <br> votos validos %.2f%%", $votoBranco, $votoNulo, $votoValido);
    }


    echo "<br>";
    echo "<br>";
    echo "13. Escreva um programa para ler o salário mensal atual de um funcionário e
    aplicar um percentual de reajuste, calcular e escrever o valor do novo salário.<br>";
?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salarioNovo" id="salarioNovoId">
        <button type="submit">Resultado com reajuste</button>
    </form>
<?php
    if(isset($_POST['salarioNovo'])){
        $salarioNovo = $_POST['salarioNovo'];

        $reajusteNovo = $salarioNovo + $salarioNovo * 0.10;
        $reajusteNovo = floor($reajusteNovo);
    
        printf("Salario com reajuste = %.2f",$reajusteNovo); 

        printf("\n");
    }
    
    echo "<br>";
    echo "<br>";
    echo "14. O custo de um carro novo ao consumidor é a soma do custo de fábrica com
    a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
    Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,
    escrever um programa para ler o custo de fábrica de um carro, calcular e
    escrever o custo final ao consumidor. <br>"

?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#14" id="14" method="POST">
        <p>Digite o custo de fábrica:</p>
        <input type="number" name="valorCarro" id="valorCarroId">
        <button type="submit">Enter</button>
    </form>
<?php
    if(isset($_POST['valorCarro'])){
        
        $valorCarro = $_POST['valorCarro'];
        $porcentagemDistribuidor = $valorCarro *0.28;
        $porcentagemImposto = $valorCarro * 0.45;

        printf("Valor final = %u",$valorCarro + $porcentagemDistribuidor + $porcentagemImposto); 

        printf("\n");
    }

    echo "<br>";
    echo "<br>";
    echo "15. Uma revendedora de carros usados paga a seus funcionários vendedores
    um salário fixo por mês, mais uma comissão também fixa para cada carro
    vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um
    programa que leia o número de carros por ele vendidos, o valor total de suas
    vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e
    escreva o salário final do vendedor. <br>";

?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>carros vendidos:</p>
        <input type="number" name="carrosVendidos" id="carrosId">
        <p>Total de vendas:</p>
        <input type="number" name="totalVendas" id="totalVendasId">
        <p>Salario fixo:</p>
        <input type="number" name="salarioFixo" id="salarioFixoId">
        <p>Valor recebido por carro vendido:</p>
        <input type="number" name="valorVendido" id="valorVendidoId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['carrosVendidos'], $_POST['totalVendas'], $_POST['salarioFixo'], $_POST['valorVendido'])){
        $carrosVendidos = $_POST['carrosVendidos'];
        $totalVendas = $_POST['totalVendas'];
        $salarioFixo = $_POST['salarioFixo'];
        $valorVendido = $_POST['valorVendido'];

        $porcentagem = $totalVendas * 0.05;

        $salarioTotal = $salarioFixo + $porcentagem;
        
        printf("Salario Total = %.2f",$salarioTotal); 

        printf("\n");
    }

    echo "<br>";
    echo "<br>";
    echo "16. A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco)
    prestações sem juros. Faça um programa que receba um valor de uma compra
    e mostre o valor das prestações. <br>";

?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#16" id="16" method="POST">
        <p>valor da compra:</p>
        <input type="number" name="valorCompra" id="compraId">
        <button type="submit">Ver Parcelas</button>
    </form>
<?php
    if(isset($_POST['valorCompra'])){
        $valorCompra = $_POST['valorCompra'];
        
        $valorParcela = $valorCompra / 5;

        printf("Valor das parcelas = %.2f",$valorParcela); 

        printf("\n");
    }


    echo "<br>";
    echo "<br>";
    echo "17. Faça um algoritmo que receba o preço de custo de um produto e mostre o
    valor de venda. Sabe-se que o preço de custo receberá um acréscimo de
    acordo com um percentual informado pelo usuário. <br>";

?>
    <form action="<?=$_SERVER['PHP_SELF'];?>#16" id="16" method="POST">
        <p>preço de custo:</p>
        <input type="number" name="precoCusto" id="custoId">
        <p>percentual:</p>
        <input type="number" name="percentualVenda" id="vendaId">
        <button type="submit">enter</button>
    </form>
<?php
    if(isset($_POST['precoCusto'], $_POST['percentualVenda'])){
        $valorCompra = $_POST['precoCusto'];
        $percentualVenda = $_POST['percentualVenda'];
        
        $valorNovo = $valorCompra + $valorCompra * ($percentualVenda / 100);

        printf("Valor de venda = %.2f",$valorNovo); 

        printf("\n");
    }
    

    echo "<br>";
    echo "<br>";
    echo "18. A padaria Hotpão vende uma certa quantidade de pães franceses e uma
    quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a broa custa
    R$ 4,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos
    pães e broas (juntos), e quanto deve guardar numa conta de poupança (10%
    do total arrecadado). Você foi contratado para fazer os cálculos para o dono.
    Com base nestes fatos, faça um programa para ler as quantidades de pães e
    de broas, e depois calcular os dados solicitados. <br>"

?>

    <form action="#18" id="18" method="POST">
    <p>valor total de paes vendidos: </p>
    <input type="number" name="paoVendido" id="paoid">
    <p>valor total de broas vendidas: </p>
    <input type="number" name="broaVendida" id="broaid">
    <button type="submit">Enter</button>
    </form>

<?php

    if(isset($_POST['paoVendido'], $_POST['broaVendida'])){
        $paoVendido = $_POST['paoVendido'];
        $broaVendida = $_POST['broaVendida'];

        $total = $paoVendido + $broaVendida;

        $poupanca = $total * 0.10;

        printf("Total Vendido: %.2f, Poupança: %.2f", $total, $poupanca);

        printf("\n");
    }

    echo "<br>";
    echo "<br>";
    echo "19. Um motorista deseja colocar no seu tanque X reais de gasolina. Escreva
    um programa para ler o preço do litro da gasolina e o valor do pagamento, e
    exibir quantos litros ele conseguiu colocar no tanque. <br>";

?>

    <form action="#19" id="19" method="POST">
    <p>Valor que deseja de gasolina: </p>
    <input type="number" name="valorColocado" id="colocadoid">
    <p>Litro da gasolina: </p>
    <input type="number" name="valorGasolina" id="gasolinaid">
    <button type="submit">Enter</button>
    </form>

<?php

    if(isset($_POST['valorColocado'], $_POST['valorGasolina'])){
        $valorColocado = $_POST['valorColocado'];
        $valorGasolina = $_POST['valorGasolina'];

        $totalLitros = $valorColocado / $valorGasolina;


        printf("Total de litros colocados: %.2f", $totalLitros);

        printf("\n");
    }

    echo "<br>";
    echo "<br>";
    echo "20. Programa par perfeito. Faça um programa em que o usuário precise digitar
    um número de 1 até 10. Agora o outro usuário digita o segundo número. Se o
    número do primeiro usuário for igual ao do segundo escreva “Esse é seu par
    perfeito” Se os números forem diferentes escreva “Afaste-se do seu inimigo” <br>";

    ?>

    <form action="#20" id="20" method="POST">
    <p>Digite o primeiro numero: </p>
    <input type="number" name="n1" id="n1id" max="10">
    <p>digite o segundo numero: </p>
    <input type="number" name="n2" id="n2id">
    <button type="submit">Enter</button>
    </form>

<?php

    if(isset($_POST['n1'], $_POST['n2'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if($n1 == $n2)
            printf("Par perfeito");
        else print("Afaste-se do inimigo");

        printf("\n");
    }
?>
