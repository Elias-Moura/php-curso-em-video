<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <h1>
        <?php
        echo "Olá, Mundo! \u{1F30E}";
        ?>
    </h1>
    <p>
        <?php

        print "Hoje é dia " . date("d/M/Y");
        print " e a hora atual é " . date("G:i:s T")
        ?>
    </p>
    <p>Teste</p>
</body>

</html>