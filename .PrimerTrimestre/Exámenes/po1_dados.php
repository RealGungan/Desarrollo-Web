<style>
    table,
    tr,
    th,
    td {
        border: 1px solid;
        border-collapse: collapse;
    }

    img {
        width: 50px;
    }
</style>

<?php

include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $jug1 = $_POST['jug1'];
    $jug2 = $_POST['jug2'];
    $jug3 = $_POST['jug3'];
    $jug4 = $_POST['jug4'];
    $num_dados = $_POST['numdados'];

    $valid = true;

    if ($jug1 == "" || $jug2 == "") {
        $valid = false;
        echo "HAS DE INTRODUCIR AL MENOS JUGADOR 1 Y JUGADOR 2";
    }
    if ($num_dados == "" || $num_dados < 3 || $num_dados > 10) {
        $valid = false;
        echo "HAS DE UTILIZAR ENTRE 3 Y 10 DADOS";
    }
    if ($valid) {
        $array_res = [];
        $jug_points = [];

        // generar los jugadores con sus respectivos dados
        $array_res += generatePlayers($jug1, $num_dados);
        $array_res += generatePlayers($jug2, $num_dados);
        $jug3 != "" ? $array_res += generatePlayers($jug3, $num_dados) : "";
        $jug4 != "" ? $array_res += generatePlayers($jug4, $num_dados) : "";

        // print results
        printResTable($array_res);

        // print res
        printRes($array_res);

        // locate winner
        winner($array_res);
    }
}
