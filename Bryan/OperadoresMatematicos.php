<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Constant em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align= 'center'>Exemplo de constant em PHP</h3><hr>";
        // Definição de Constant
        define("linguagem","PHP - Linguagem Dinâmica");
        
        echo "<strong>Linguagem: </strong>" . linguagem;
        defina("linguagem", "A caracteristica da linguagem PHP, é que necessita de servidor para interpretar, ou seja compilar o código: ");
        echo linguagem;

    ?>
</body>
</html>