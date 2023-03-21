<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 números com formulário</title>
    <style type="text/css">
        h3 {
            color:#993399 ;
            border-bottom:1px solid #993399 ;
            width: 160px;
        }
        label, input {
           color:#993399 ;
        }
        input {
            margin-left:5px;
        }
    </style>
</head>
<body>
    <?php
       echo "<h3>Soma de 2 Números</h3>";
       echo "<form name= 'soma' method='post' action='Exibir_Soma.php'>";
       echo "<p>";
          echo "<label for= 'numero1'>Número1:</label>";
          echo "<input type='text' name='num1' size=4 maxlength=4 required>";
       echo "</p>";

       echo "<p>";
          echo "<label for= 'numero2'>Número2:</label>";
          echo "<input type='text' name='num2'size=4 maxlength=4 required>";
       echo "</p>";
        
       echo "<p>";
           echo "<input type='submit' value='Somar' name='somar'>";
           echo "<input type='reset' value='Limpar' name='limpar'>";
       echo "</p>";   

    
    ?>
</body>
</html>