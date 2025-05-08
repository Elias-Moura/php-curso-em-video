<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Elias";
        $idade = 24;
        // float[32 bits] e double[64 bits] são o mesmo tipo
        // ocupam o mesmo espaço em memória
        // E possuem a mesma precisão
        // diferente do Java.
        // php 7.4 havia a opção real que foi descontinuada
        $peso = 95.5; //float, double 
        $casado = false;

        // 0x1a é um hexadecimal e para o php é um int
        // 3e2 == 3 * 10 ** 2 todo numero represenatado por uma potência é um double 
        // começa com 0 é um Octal

        var_dump($peso); // diz o tipo e o valor da variável

        $idade = (float) 350;

        var_dump($idade);
        
        // Se você der print em um booleano false vai retornar vazio e true 1

        // Tipos compostos
        // array -> pode ser heterogêneo
        $vet = [6,2,9,3,5];
        var_dump($vet);
        // object
        class Pessoa {
            private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p);
        // Tipos especiais
        // null
        // resource
        // callabe
        // mixed
    ?>
</body>
</html>