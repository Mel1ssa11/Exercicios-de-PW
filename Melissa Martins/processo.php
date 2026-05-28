<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Resultado</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;

    background:
    linear-gradient(
        135deg,
        #d9e7d2,
        #c7dbc0,
        #b7cfaf
    );

    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 20px;
}

.container{

    width: 100%;
    max-width: 700px;

    background: rgba(255,255,255,0.55);

    backdrop-filter: blur(10px);

    border-radius: 30px;

    padding: 35px;

    border: 2px solid rgba(255,255,255,0.5);

    box-shadow:
    0 10px 30px rgba(80,110,70,0.15);
}

h1{
    text-align: center;

    color: #4c6446;

    margin-bottom: 25px;

    font-size: clamp(30px,5vw,45px);
}

.resultado{

    background: #f6fbf4;

    border-radius: 20px;

    padding: 20px;

    color: #42583d;

    font-size: 18px;

    line-height: 1.8;

    margin-bottom: 25px;

    border-left: 6px solid #8baa7d;
}

a{
    display: block;

    text-align: center;

    text-decoration: none;

    background:
    linear-gradient(
        135deg,
        #7d9c73,
        #a8c49a
    );

    color: white;

    padding: 15px;

    border-radius: 18px;

    font-weight: 600;

    transition: 0.3s;
}

a:hover{
    transform: scale(1.02);

    box-shadow:
    0 10px 25px rgba(108,140,98,0.25);
}

</style>

</head>
<body>

<div class="container">

<h1>Resultado</h1>

<div class="resultado">

<?php

if(isset($_POST['tabuada'])){

    $n = $_POST['tabuada'];

    echo "<h2>Tabuada</h2><br>";

    for($i = 1; $i <= 10; $i++){

        echo "$n x $i = " . ($n * $i) . "<br>";

    }

}

if(isset($_POST['preco']) && isset($_POST['desconto'])){

    $preco = $_POST['preco'];

    $desconto = $_POST['desconto'];

    $final = $preco - ($preco * $desconto / 100);

    echo "<h2>Desconto</h2><br>";

    echo "Valor final: R$ " . number_format($final,2,",",".");

}

if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) && isset($_POST['n4'])){

    $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'] + $_POST['n4']) / 4;

    echo "<h2>Média</h2><br>";

    if($media >= 5){

        echo "Aprovado com média $media";

    }else{

        echo "Reprovado com média $media";

    }

} // <--- ESTA CHAVE ESTAVA FALTANDO AQUI!

if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3'])){

    $q1 = $_POST['q1'];

    $q2 = $_POST['q2'];

    $q3 = $_POST['q3'];

    $soma = ($q1 * $q1) + ($q2 * $q2) + ($q3 * $q3);

    echo "<h2>Soma dos quadrados</h2><br>";

    echo $soma;

}

if(isset($_POST['salario'])){

    $salario = $_POST['salario'];

    $liquido = ($salario + ($salario * 0.10)) - ($salario * 0.20);

    echo "<h2>Salário líquido</h2><br>";

    echo "R$ " . number_format($liquido,2,",",".");

}

if(isset($_POST['m1']) && isset($_POST['m2']) && isset($_POST['m3']) && isset($_POST['m4'])){

    $media = ($_POST['m1'] + $_POST['m2'] + $_POST['m3'] + $_POST['m4']) / 4;

    echo "<h2>Situação</h2><br>";

    if($media >= 6){

        echo "Aprovado";

    }elseif($media < 3){

        echo "Retido";

    }else{

        echo "Exame";

    }

}

if(isset($_POST['maior1']) && isset($_POST['maior2']) && isset($_POST['maior3'])){

    $n1 = $_POST['maior1'];

    $n2 = $_POST['maior2'];

    $n3 = $_POST['maior3'];

    $maior = max($n1, $n2, $n3);

    $menor = min($n1, $n2, $n3);

    echo "<h2>Maior e menor</h2><br>";

    echo "Maior: $maior <br>";

    echo "Menor: $menor";

}

if(isset($_POST['inicio']) && isset($_POST['fim'])){

    $inicio = $_POST['inicio'];

    $fim = $_POST['fim'];

    $soma = 0;

    for($i = $inicio; $i <= $fim; $i++){

        if($i % 2 != 0){

            $soma += $i;

        }

    }

    echo "<h2>Soma dos ímpares</h2><br>";

    echo $soma;

}

if(isset($_POST['parimpar'])){

    $n = $_POST['parimpar'];

    echo "<h2>Par ou ímpar</h2><br>";

    if($n % 2 == 0){

        echo "Par";

    }else{

        echo "Ímpar";

    }

}

if(isset($_POST['calc1']) && isset($_POST['calc2']) && isset($_POST['operador'])){

    $n1 = $_POST['calc1'];

    $n2 = $_POST['calc2'];

    $op = $_POST['operador'];

    echo "<h2>Calculadora</h2><br>";

    switch($op){

        case "+":
            echo $n1 + $n2;
        break;

        case "-":
            echo $n1 - $n2;
        break;

        case "*":
            echo $n1 * $n2;
        break;

        case "/":
            echo $n1 / $n2;
        break;

    }

}

?>

</div>

<a href="index.html">
    Voltar
</a>

</div>

</body>
</html>