<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
        background-color: #ffcbff;
    }
</style>
<body>
    
</body>
</html>


<?php

    // Recuperar as informações enviadas pelo formulário
    // method: get


    $numero1 = $_GET["num1"];

    $numero2 = $_GET["num2"];

    $operacao = $_GET["operacao"];



    // Realizar o processo das informações

    echo "<a href=index.php><img src=seta.png width=50px></a><br>";

    


    if($operacao == "soma"){
        $resultado = $numero1 + $numero2;
        echo "<h2>Resultado:  $resultado </h2>";
    }
    elseif($operacao == "subtrair"){
        $resultado = $numero1 - $numero2;
        echo "<h2>Resultado:  $resultado </h2>";
    }
    elseif($operacao == "multiplicar"){
        $resultado = $numero1 * $numero2;
        echo "<h2>Resultado:  $resultado </h2>";
    }
    elseif($operacao == "dividir"){
        $resultado = $numero1 / $numero2;
        echo "<h2>Resultado:  $resultado </h2>";
    }
    else{
        echo "<h2>Escolha uma operação! </h2>";
    }







    // if($tabuada == "1"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "2"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "3"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "4"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "5"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "6"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "7"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "8"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "9"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }

    // if($tabuada == "9"){
    //     echo "<ul>";
    //     for ($i = 0; $i <= 10; $i++) {
    //         $resultado = $tabuada * $i;
    //         echo "<li>$tabuada x $i = $resultado</li>";
    //     }
    //     echo "</ul>";
    // }



    // Criei a variável tabuada que é o nome do meu select 
    // criei um if comparando a variável com as opçoes do select 
    // criei um for e uma variável que vai até 10, e o resultado é 
    // a tabuada vezes o i até 10.

    

 



    







