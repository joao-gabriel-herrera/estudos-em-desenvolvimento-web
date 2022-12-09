<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
  
   <?php

$resultado = "";
if(isset($_GET['peso']) && isset($_GET['altura'])){

   $imc = $_GET['peso'] / ($_GET['altura'] * $_GET['altura']);
   if ($imc < 18.5){
    $resultado = 'Abaixo do peso normal';
   }
   else if ($imc >=  18.5 && $imc <= 24.9){
    $resultado = 'Peso normal';
   }

   else if (($imc >= 25) && ($imc <= 29.9)){
    $resultado = 'Excesso de peso';
   }
   else if ($imc >= 30 && $imc <= 34.9){
    $resultado = 'Obesidade Classe 1';
   }
   else if ($imc >= 35 && $imc <= 39.9){
    $resultado = 'Obesidade Classe 2';
   }
   else {
    $resultado = 'Obesidade Classe 3';
   }

}
    ?>


    <form method="GET">
        <label id="peso">Peso  </label>
        <input name="peso" id="peso" type="number"/>
        <br>
        <label id="altura">Altura</label>
        <input name="altura" id="altura" type="text"/>
        <br>
        <input type="submit" value="Enviar"/>
    </form>
    <p>Resultado: <?= $resultado ?></p>
</body>
</html>
