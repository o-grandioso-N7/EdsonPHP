<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento em PHP</title>
</head>
<body>
    <?php
        echo "<h3>Incrementando</h3>";
        $contador = 0; // Define a variavel $contador iniciando com zero.
        echo "variavel <strong>contador</strong> inicializando: $contador";
        
        $contador+=1;  // Define a variavel $contador incrementando mais 1
        echo "<p>Valor da variavel <strong>contador</strong> com incremento de $contador</p>";
    
        $contador+=5;
        echo "<p>Valor de variavel <strong>contador</strong> com incremento de 5 é igual a $contador</p>";

        echo "<h3>Decrementando</h3>";
        $contador-=2;
        echo "<p> Valor da variavel <strong>contador</strong> com drecremento de 2 é igual a $contador</p>";

        
    ?>
</body>
</html>