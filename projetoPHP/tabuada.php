

<?php

include "body.php";

$tabuada = $_GET["tabuada"];


for ($i = 1; $i <= 10; $i++) {

for($tabuada = 0; $tabuada <= 10; $tabuada++){

    $resultado = $i * $tabuada;
    echo "<li>$i x $tabuada = $resultado</li>";
   

}

echo "<br>";

}