<?php

include 'pokerldV_fun.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $valid = true;

    $players = createPlayer();

    if (count($players) < 4) {
        $valid = false;
        $error = 'HAS DE INTRODUCIR LOS CUATRO PRIMEROS JUGADORES COMO MÍNIMO';
    } elseif ($_POST['bote'] == '') {
        $valid = false;
        $error = 'HAS DE INTRODUCIR UN BOTE';
    } elseif ($_POST['bote'] <= 0) {
        $valid = false;
        $error = 'HAS DE INTRODUCIR UN BOTE MAYOR QUE CERO';
    }

    if ($valid) {
        $players = handCards($players);

        printCards($players);

        $results = countCards($players);

        $winners = getWinners($results);
    } else {
        readfile('pokerldv.html');
        echo $error;
    }
}
