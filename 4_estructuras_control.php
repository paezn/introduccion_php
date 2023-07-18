<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
        //if, if-else
        echo "<h1>if</h1>";
        //Ejemplo 1
        $color = "rojo";
        if($color = "rojo")
        {
            print("Efectivamente, el color es rojo");
        }

        echo "<br>";
        //Ejemplo 2
        $x = 10;
        $y = 15;
        if($x == $y)
        {
            print("x e y son iguales");
        }
        elseif($x > $y)
        {
            print("x es mayor que y");
        }
        elseif($x < $y)
        {
            print("x es menor que y");
        }
        echo "<br>";
        echo "<h1>while</h1>";
        //while
        // indica que mientras no se cumpla una determinada condición, no se saldrá del bucle y no 
        // saltará a la siguiente linea de código
        $x = 10;
        while(--$x)
        {
            echo "<big>";
            echo "<b>";
            print("Número: ".$x);
            echo "<br>";
            echo "<hr>";
        }
        //do-while

        //for
        //será utilizado para ejecutarun bucle un determinado número de veces, hasta que se cumpla una
        // condición
        echo "<br>";
        echo "<h1>for</h1>";
        for($x=5; $x<=10; $x++)
        {
            print("Número: ".$x."<br>");
        }
           
        //require
        //Sirve para incluir archivos en nuestras paginas y solo será necesario hacer referencia
        //a este archivo con la instrución require.  Se usa principalmente para definir variables,
        //y estas estarán listas una vez hagamos una llamada al archivo donde estén guardadas.

        //include
        // El funcionamiento es igual que el de la instrucción require(), con la diferencia de que si
        // puede procesar el código tantas veces como la llamemos a esa pagina externa.

        echo "<br>";
        echo "<h1>include</h1>";
        include("variables.php");
        echo "<br>";
        print("$x"."$z"."$y");

        //switch
        // Se utiliza para comprobar un dato entre varias posibilidades
        echo "<br>";
        echo "<h1>switch</h1>";
        $color = "negro";
        switch($color)
        {
            case "blanco":
                $sector = "claro";
                break;
            case "naranja":
                $sector = "normal";
                break;
            case "negro":
                $sector = "oscuro";
                break;
        }
        print($sector);
    ?>
    
</body>
</html>