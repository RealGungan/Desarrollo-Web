<?php
include 'funciones_bolsa.php';

$data = $_POST['valores'];
$file_name = 'ibex35.txt';
$file = fopen($file_name, 'r');

showValues($file_name, $data);
