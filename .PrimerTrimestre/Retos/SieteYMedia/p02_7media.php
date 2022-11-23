<HTML>

<HEAD>
  <TITLE> EJ6B – Factorial</TITLE>

  <style>
    table,
    tr,
    td {
      border: 1px solid;
      border-collapse: collapse;
      text-align: center;
    }
  </style>
</HEAD>

<BODY>
  <?php
  /* Nombre Alumno: Daniel Fuentes */

  include 'p02_7media_functions.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $players = CreatePlayer();

    $players = handCards($players);

    printCards($players);

    $res = countCards($players);

    printRes($res);

    $win = getWinner($res);

    if ($win == []) {
      $higher = getHigger($res);
    }

    giveMoney($res, $win);
  }
  ?>
</BODY>

</HTML>