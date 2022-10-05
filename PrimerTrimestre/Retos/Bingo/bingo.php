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

    printf("<div>");
    createCarton();
    printf("</div>");

    printf("<div>");
    createCarton();
    printf("</div>");

    //función para generar arrays
    function createCarton()
    {
        $arr_2d = [];
        $numeros_bolsa = [];
        $numeros_rellenar = [];
        $numeros_rellenar_count = 0;
        $numeros_no_validos = [];
        $vacio = 0;
        $vacio_count = 0;

        printf("<div>");
        printf("<table>");

        //generar números
        for ($i = 1; $i <= 60; $i++) {
            $numeros_bolsa[$i] = $i;
        }

        $numeros_rellenar = $numeros_bolsa;

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 7; $j++) {
                $vacio = rand(1, 10);
                if ($vacio % 2 == 0 || $vacio_count == 6) {
                    $numeros_rellenar_count++;
                    $numero = $numeros_rellenar[rand(1, 60 - $numeros_rellenar_count)];
                    array_splice($numeros_rellenar, array_search($numero, $numeros_rellenar), 1);
                    printf("<td>" . $numero . "</td>");
                } else {
                    $arr_rows[] = "";
                    printf("<td></td>");
                    $vacio_count++;
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