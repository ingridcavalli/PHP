<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe a soma </title>
</head>
<body>
    <?php
       echo "<h3>CALCULA E EXIBE A SOMA</h3>";
       $numero1 = $_POST ["num1"]; // REcupera o conteúdo digitado na caixa1, da página soma2numeros
       $numero2 = $_POST ["num2"];
       echo "Número1:  " .$numero1;
       echo "<br>Número2:  " .$numero2;
      
       
       $soma = $numero1 + $numero2;
       echo "<br><strong>Soma:</strong>" . $soma;
    ?>
</body>
</html>