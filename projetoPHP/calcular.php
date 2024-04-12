

<?php

include "body.php";

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







    




    

 



    







