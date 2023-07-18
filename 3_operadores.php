<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
        //Operadores aritméticos
        // Suma: +
        // Resta: -
        // Multiplicación: *
        // División: /
        // Módulo: %
        // Incremento: ++
        // Decremento: --
        // Exponenciación: **
        echo "<h1>Operadores Aritméticos</h1><br>";
        $x = 9;
        echo ("x = ".$x."<br>");
        $y = 3;
        echo ("y = ".$y."<br>");
        $z = 5;
        echo ("z = ".$z."<br>");
        $suma = $x + $y;
        echo ("suma = ".$suma."<br>");
        $resta = $x - $z;
        echo ("resta = ".$resta."<br>");
        $multiplicacion = $suma*$resta;
        echo ("multiplicacion = ".$multiplicacion."<br>");
        $final = $multiplicacion++;
        echo ("final = ".$final."<br>");
        echo ("multiplicacion = ".$multiplicacion."<br>");

        //Operadores de comparación
        // Igual: ==
        // Idéntico: ===
        // Diferente: !=
        // Menor: <
        // Mayor: >
        // Menor o igual: <=
        // Mayor o igual: >=
        echo "<h1>Operadores de comparación</h1><br>";
        $x = 5;
        $y = 5;
        echo ($x == $y);
        echo ($x <= $y);

        //Operadores lógicos
        // AND o &&: $a && $b es True si $a y $b son verdaderos
        // OR o ||: $a || $b es True si $a o $b son verdaderos
        // XOR: $a XOR $b es True si $a es verdadero o $b es verdadero, pero no los dos
        // !: !$a es True si $a es False
        echo "<h1>Operadores lógicos</h1><br>";
        $x = 4;
        $y = 5;

        if(($x==4) && ($y==5))
        {
            print("Estás en lo correcto");
        }
        echo "<br>";
        if(($x==4) OR ($y==3))
        {
            print("La segunda operación también es correcta");
        }

        //Operadores de unión (concatenación) de cadenas
        // Para la unión de cadenas se emplea el punto (.)
        echo "<h1>Operadores de unión de cadenas</h1><br>";
        $t = "Ejemplo";
        $w = 'unión';
        $x = "de";
        $y = "cadenas";
        $z = ' ';
        $resultado1 = $t;
        $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
        echo '<b><h1>';
        echo $resultado1;
        echo '<hr>';
        echo $resultado2;
        echo '</b></h1>';

    ?>
</body>
</html>