<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "10";
    //creamos la variable para almacenar el resultado y,
    //a la vez, multiplicar en el bucle "for"
    $res = 1;

    //imprimimos la variable "num" seguido del símbolo del
    //cálculo facotorial y un igual
    printf($num . "! = ");
    //el buclo "for" comenzará con el valor de la variable
    //"num", irá disminuyendo en uno, y terminará cuando
    //"i" sea igual o menor que cero
    for ($i = $num; $i > 0; $i--) {
        //si "i" es igual a uno, se imprime el valor de "i"
        if ($i == 1) {
            printf($i . " ");
        }
        //si es mayor que uno, se imprimirá el valor de "i"
        //seguido de una "x"
        else {
            printf($i . " x ");
        }
        //php no superpone la variable, por lo que los valores
        //de las multiplicaciones se van sumando
        $res = $res * $i;
    }

    //imprimimos un igual seguido del resultado
    printf("= " . $res);
    ?>
</BODY>

</HTML>