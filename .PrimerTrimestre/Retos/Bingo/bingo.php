<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td {
            border: 1px solid;
            border-collapse: collapse;
            font-size: 1rem;
            padding: .5rem;
            width: 90px;
            height: 40px;
            text-align: center;
        }

        div:nth-of-type(1),
        div:nth-of-type(2),
        div:nth-of-type(3),
        div:nth-of-type(4) {
            align-items: center;
        }

        div {
            width: fit-content;
            display: flex;
            padding: .5rem;
        }

        #bolas {
            border: 1px solid black;
            display: flex;
            flex-wrap: wrap;
            padding: .5rem;
            float: left;
        }

        #bolasob {
            width: 100%;
            margin-left: 40%;
        }

        #image {
            flex: 1 1 160px;
        }
    </style>
</HEAD>

<BODY>
    <?php
    $ganador = false;
    $numeros_bolsa = [];
    $bola = 0;

    //generar números
    for ($i = 0; $i < 60; $i++) {
        $numeros_bolsa[$i] = $i + 1;
    }

    printf("<div><h3>JUGADOR 1</h3>");
    $carton1 = createCarton($numeros_bolsa);
    $carton2 = createCarton($numeros_bolsa);
    $carton3 = createCarton($numeros_bolsa);
    printf("</div>");

    printf("<div><h3>JUGADOR 2</h3>");
    $carton4 = createCarton($numeros_bolsa);
    $carton5 = createCarton($numeros_bolsa);
    $carton6 = createCarton($numeros_bolsa);
    printf("</div>");

    printf("<div><h3>JUGADOR 3</h3>");
    $carton7 = createCarton($numeros_bolsa);
    $carton8 = createCarton($numeros_bolsa);
    $carton9 = createCarton($numeros_bolsa);
    printf("</div>");

    printf("<div><h3>JUGADOR 4</h3>");
    $carton10 = createCarton($numeros_bolsa);
    $carton11 = createCarton($numeros_bolsa);
    $carton12 = createCarton($numeros_bolsa);
    printf("</div>");

    while (!$ganador) {
        printf("<div>");
        $ganador = comprobar($numeros_bolsa, $carton1, $carton2, $carton3, $carton4, $carton5, $carton6, $carton7, $carton8, $carton10, $carton11, $carton12, $bola, $g1anador);
        printf("</div>");
    }

    //función para generar arrays
    function createCarton($numeros_bolsa)
    {
        $arr_2d = [];
        $numeros_rellenar = [];
        $numeros_rellenar_count = 0;
        $numeros_no_validos = [];
        $rand = 0;
        $vacio = 0;
        $vacio_count = 0;

        printf("<div>");
        printf("<table>");

        $numeros_rellenar = $numeros_bolsa;

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            unset($numeros_no_validos);
            $numeros_no_validos = [];
            $numeros_rellenar = $numeros_bolsa;
            for ($j = 0; $j < 7; $j++) {
                $vacio = rand(1, 10);
                if ($vacio % 2 == 0 || $vacio_count == 6 && $vacio_count) {
                    $numeros_rellenar_count++;
                    $rand = rand(1, 60 - $numeros_rellenar_count);
                    while (array_search($rand, $numeros_no_validos)) {
                        $rand = rand(1, 60 - $numeros_rellenar_count);
                    }
                    $numero = $numeros_rellenar[array_search($rand, $numeros_rellenar)];
                    unset($numeros_rellenar[array_search($numero, $numeros_rellenar)]);
                    $numeros_rellenar = array_values($numeros_rellenar);
                    $numeros_no_validos[] = $numero;
                    printf("<td>" . $numero . "</td>");
                    $arr_rows[] = $numero;
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

    // comprobar cartón
    function comprobar($numeros_bolsa, $carton1, $carton2, $carton3, $carton4, $carton5, $carton6, $carton7, $carton8, $carton10, $carton11, $carton12, $bola, $ganador)
    {
        $contador1 = 0;
        $contador2 = 0;
        $contador3 = 0;
        $numeros_no_validos = [];
        printf("<div id=\"bolas\"><div id=\"bolasob\"><h1>Bolas obtenidas</h1></div>");

        while (!$ganador) {
            $bola = rand(1, 60);
            unset($numeros_bolsa[array_search($bola, $numeros_bolsa)]);
            $numeros_bolsa = array_values($numeros_bolsa);

            $numeros_no_validos[] = $bola;

            printf("<div>Bola: <img src=images/" . $bola . ".png width=\"35\" height=\"35\"\/ id = \"image\"></div>");

            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    if ($carton1[$i][$j] == $bola) {
                        $contador1++;
                        if ($contador1 == 15) {
                            printf("</div>");
                            printf("<div id = \"ganador\">");
                            printf("<br><br>El ganador es el jugador 1");
                            printf("</div>");
                            $ganador = true;
                            return $ganador;
                        }
                    }
                    if ($carton2[$i][$j] == $bola) {
                        $contador2++;
                        if ($contador2 == 15) {
                            printf("</div>");
                            printf("<div id = \"ganador\">");
                            printf("<br><br>El ganador es el jugador 2");
                            printf("</div>");
                            $ganador = true;
                            return $ganador;
                        }
                    }
                    if ($carton3[$i][$j] == $bola) {
                        $contador3++;
                        if ($contador3 == 15) {
                            printf("</div>");
                            printf("<div id = \"ganador\">");
                            printf("<br><br>El ganador es el jugador 3");
                            printf("</div>");
                            $ganador = true;
                            return $ganador;
                        }
                    }
                }
            }
        }
    }

    ?>
</BODY>

</HTML>