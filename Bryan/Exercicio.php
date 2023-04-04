<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>Exercicio</title>
</head>
<body>
    <?php
    echo "<form action ='exercicio.php' method = 'get' >";
    echo "<div class = 'quadrado'><center><h3>Controle de gastos</h3>";
    echo "<h4>receitas</h4>";
    echo "receita 1 : <input type = 'number' step = '0.01' min = '0.01' name = 'receita1'><br>";
    echo "receita 2 : <input type = 'number' step = '0.01' min = '0.01' name = 'receita2'><br>";
    echo "<h4>despesas</h4>";
    echo "despesa 1 : <input type = 'number' step = '0.01' min = '0.01' name = 'despesa1'><br>";
    echo "despesa 2 : <input type = 'number' step = '0.01' min = '0.01' name = 'despesa2'><br>";
    echo "despesa 3 : <input type = 'number' step = '0.01' min = '0.01' name = 'despesa3'><br>";
    echo "despesa 4 : <input type = 'number' step = '0.01' min = '0.01' name = 'despesa4'><br>";
    echo "<input type ='submit' value = 'calcular' name = 'calcular' ><br>";
    echo "<hr align = 'center' width = '400px'>";
    echo "</form>";
    echo "<h2>Receitas</h2>";
    echo "Receita 1 = R$" , $_GET["receita1"] , "<br>";
    echo "Receita 2 = R$" , $_GET["receita2"] , "<br>";
    echo "Total de Receitas = R$" , $_GET["receita1"] + $_GET ["receita2"] , "<br>";
    echo "<hr align = 'center' width = '400px'>";
    echo "<h2>Despesas</h2>";
    echo "Despesa 1 = R$" , $_GET["despesa1"] , "<br>";
    echo "Despesa 2 = R$" , $_GET["despesa2"] , "<br>";
    echo "Despesa 3 = R$" , $_GET["despesa3"] , "<br>";
    echo "Despesa 4 = R$" , $_GET["despesa4"] , "<br>";
    echo "Total de Despesas = R$" , $_GET["despesa1"] + $_GET ["despesa2"] + $_GET ["despesa3"] + $_GET ["despesa4"] , "<br>";
    echo "<hr align = 'center' width = '400px'>";
    if ($_GET["receita1"] + $_GET ["receita2"] <  $_GET["despesa1"] + $_GET ["despesa2"] + $_GET ["despesa3"] + $_GET ["despesa4"])
        echo "<h3 style = 'color:red;'>Resultado = Débito</h3>";
    if ($_GET["receita1"] + $_GET ["receita2"] >  $_GET["despesa1"] + $_GET ["despesa2"] + $_GET ["despesa3"] + $_GET ["despesa4"])
        echo "<h3 style = 'color:blue;'>Resultado = Crédito</h3>";
    ?>
</body>
</html>