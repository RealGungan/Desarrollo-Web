<?php

// función para crear los jugadores
function createPlayer()
{
    $players = [];

    $postdata = file_get_contents("php://input");

    foreach ($_POST as $key => $value) {
        if ($value != '' && $key != 'bote' && $key != 'submit') $players[$value] = [];
    }

    return $players;
}

// función para repartir cuatro cartas a cada jugador
function handCards($players)
{
    // variable para movernos a través del array de cartas
    $pointer = 0;
    // crear el array con las cartas llamando a la función fillCards
    $cards = fillCards();

    // a cada jugador se le reparten cuatro cartas
    foreach (array_keys($players) as $player) {
        for ($i = 0; $i < 4; $i++) {
            $players[$player][] = $cards[$pointer];
            $pointer++;
        }
    }

    return $players;
}

// función que recoge todas las imágenes de la carpeta 'images' y las almacena en un array
function fillCards()
{
    $cards = [];
    $files = scandir('images');

    for ($i = 2; $i < 34; $i++) {
        $cards[] = $files[$i];
    }

    // se mezcla el array para que al repartir sea aleatorio
    shuffle($cards);

    return $cards;
}

// función para imprimir las cartas que tiene cada jugador
function printCards($players)
{
    foreach ($players as $player => $card) {
        echo $player . ' ';
        for ($i = 0; $i < count($card); $i++) {
            echo '<img src="images/' . $card[$i] . '", width=50;/>';
        }
        echo '<br>';
    }
}

// función para comprobar si un jugador tiene poker, trio, doble pareja o pareja
function countCards($players)
{
    $results = [];

    foreach ($players as $player => $cards) {
        $equal = 0;

        for ($i = 0; $i < count($cards); $i++) {
            $cards[$i] = substr($cards[$i], 0, 1);
        }

        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $tmp = array_count_values($cards);
                $equal += $tmp[$cards[$i]];
            }
        }

        if ($equal == 48) {
            $results[$player] = 'POKER';
        }
        if ($equal == 18) {
            $results[$player] = 'PAREJA';
        }
        if ($equal == 30) {
            $results[$player] = 'TRIO';
        }
        if ($equal == 24) {
            $results[$player] = 'DOBLE PAREJA';
        }
    }

    return $results;
}

// función para localizar a los ganadores en orden de prioridad
function getWinners($results)
{
    $winners = [];

    if (in_array('POKER', $results)) {
        foreach ($results as $player => $result) {
            if ($result == 'POKER') {
                $winners[$player] = $result;
            }
        }
    } elseif (in_array('TRIO', $results)) {
        foreach ($results as $player => $result) {
            if ($result == 'TRIO') {
                $winners[$player] = $result;
            }
        }
    } elseif (in_array('DOBLE PAREJA', $results)) {
        foreach ($results as $player => $result) {
            if ($result == 'DOBLE PAREJA') {
                $winners[$player] = $result;
            }
        }
    } elseif (in_array('PAREJA', $results)) {
        foreach ($results as $player => $result) {
            if ($result == 'PAREJA') {
                $winners[$player] = $result;
            }
        }
    }

    // imprimir el jugador ganador con el dinero que le corresponde
    foreach (array_keys($winners) as $player) {
        echo '<br>GANADOR: ' . $player;
        giveMoney($winners);
    }

    return $winners;
}

// función para repartir el dinero. El dinero ganado depende de las cartas del jugador
function giveMoney($winners)
{
    $money = $_POST['bote'];

    if (in_array('POKER', $winners)) {
        echo ' ha ganado ' . $money . ' euros';
    } elseif (in_array('TRIO', $winners)) {
        echo ' ha ganado ' . ($money * .7) . ' euros';
    } elseif (in_array('DOBLE PAREJA', $winners)) {
        echo ' ha ganado ' . ($money * .5) . ' euros';
    }
}
