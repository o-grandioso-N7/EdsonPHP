<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set ("America/Sao_Paulo");
        // Define as variáveis para receber o dia, o mês e o ano
        $dia = date("d"); // Extrai a dia da função date
        $mes = date("m"); // Extrai o mês da função date
        $ano = date("i"); // Extrai o ano da função date
        
        $hora = date("h"); // Extrai a hora da função date
        $minutos = date("i"); // Extrai o minuto da função date
        $segundos = date("s"); // Extrai o segundo da função date

        // Exibe a hora do sistema operacional
        echo (" hoje é dia ". $dia . " de " . $mes .  " de " .  " 2023 ");
        
        echo ("<br> Agora são " .  $hora . " horas, " . $minutos . " minutos e " . $segundos . " segundos. " )

    ?>
</body>
</html>