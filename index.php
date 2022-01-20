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
        echo"<h2>Variables y constantes</h2>";
        define("DATO","un dato de ejemplo"); //define: Para declarar la una variable.
        echo"La constante DATO es " .DATO;

        $numero=5;
        $numero++; 
        echo"<p>El número es ".$numero."</p>"; //El valor sera 6
        echo"<p>El número es ".++$numero."</p>";//El valor sera 7

        echo"<hr>";

        echo "<h3>Operadores</h3>";

        $numero1=10;
        $numero2=15;

        if($numero1>=$numero2){
            echo"<p>El primer número es mayor</p>";
        }
        else{
            echo "<p>El primer número es menor</p>";
        }

        $aprobado=true;
        if($aprobado){
            echo"<p>Has aprobado</p>";
        }
        else{
            echo "<p>NA: No apto</p>";
 
        }

        $nota="8";
        if($nota===8){
            echo "<p>Tu nota es un 8 - Notable</p>";
        }
        else{
            echo "<p>Tu nota no es un 8</p>";
        }


        echo"<hr>";
        echo "<h3>Estructuras de control</h3>";

        for($i=0;$i<=10;$i++){
            echo $i."-";
        }
        echo"<hr>";

        $a=0;
        while($a<=10){
            echo $a++."--";
        }

    ?>
</body>
</html>
