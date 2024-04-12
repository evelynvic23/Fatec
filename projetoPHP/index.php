<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora Simples PHP</h1>

   

    <!-- action: local onde se recebe as informações
         method: forma de envio -->

    <form action="calcular.php" method="get">
        <label for=""><h3>Número 1</h3></label>
        
        <input type="text" name="num1" placeholder="Informe o primeiro valor">
        <br>
        <label for=""><h3>Número 2</h3></label>
        
        <input type="text" name="num2" placeholder="Informe o segundo valor">
        <br>
        <label for=""><h3>Informar</h3></label>
        
        <select name="operacao" id="">
        <option value="soma">Soma</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
        </select>

        <br>
            <button type="submit" value="Calcular">
                Calcular
            </button>

            </form>

            <br>
            <br>








     <form action="tabuada.php" method="get">
        <br>
        <br>
         <label for="">Selecione a tabuada</label>
        <select name="tabuada" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>

        <button type="submit" value="tabuada">
                Calcular
            </button>

        </form>
  
</body>
</html>


<?php
include "body.php";
