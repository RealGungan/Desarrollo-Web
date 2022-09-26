<HTML>

<HEAD>
    <TITLE> EJ4B – Tabla Multiplicar</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "8";
    //variable para llevar la cuenta de las multiplicaciones
    $cont = 1;

    //mientras el contador sea menor o igual que diez, el bucle seguirá funcionando
    while ($cont <= 10) {
        //imprimimos el número seguido de la sintaxis que se suele utilizar en las
        //multiplicaciones junto con el resultado
        printf($num . " x " . $cont . " = " . ($num * $cont) . "</br>");
        //incrementamos en uno el contador
        $cont++;
    }
    ?>
</BODY>

</HTML>