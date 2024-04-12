
<?php

include "body.php";

$tabuada = $_GET["tabuada"];

echo "<a href=index.php><img src=seta.png width=50px></a><br>";


echo "<h2>Tabuada escolhida</h2>";


if($tabuada == "1"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "2"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "3"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "4"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "5"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "6"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "7"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "8"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "9"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }

    if($tabuada == "9"){
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }



    // Criei a variável tabuada que é o nome do meu select 
    // criei um if comparando a variável com as opçoes do select 
    // criei um for e uma variável que vai até 10, e o resultado é 
    // a tabuada vezes o i até 10.


    echo "<h2>Todas as tabuadas</h2>";

    for ($i = 1; $i <= 10; $i++) {

    for($tabuada = 0; $tabuada <= 10; $tabuada++){

        $resultado = $i * $tabuada;
        echo "<li>$i x $tabuada = $resultado</li>";
    

    }

    echo "<br>";

    }

