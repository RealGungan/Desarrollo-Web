<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td {
            border: 1px solid;
            border-collapse: collapse;
            font-size: 3rem;
            padding: 1rem;

            text-align: center;
        }

        div {
            width: fit-content;
            display: flex;
            padding: 1rem
        }
    </style>
</HEAD>

<BODY>
    <?php
    printf("<div>");
    createCarton();
    printf("</div>");

    //función para generar arrays
    function createCarton()
    {
        $arr_2d = [];
        $numeros = [];
        $vacio = 0;

        printf("<div>");
        printf("<table>");

        //generar números
        for ($i = 1; $i <= 60; $i++) {
            $numeros[$i] = $i;
        }

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 7; $j++) {
                $count = rand(1, 10);
                if ($vacio % 2 == 0 && $count < 6 || $vacio == 6) {
                    $numero = $numeros[rand(1, 60)];
                    $arr_rows[] = $numero;
                    printf("<td>" . $numero . "</td>");
                    $count++;
                    $vacio++;
                } else {
                    $arr_rows[] = " ";
                }
            }
            printf("</tr>");
            $arr_2d[] = $arr_rows;
        }

        printf("</table>");
        printf("</div>");

        return $arr_2d;
    }
    ?>
</BODY>

</HTML>