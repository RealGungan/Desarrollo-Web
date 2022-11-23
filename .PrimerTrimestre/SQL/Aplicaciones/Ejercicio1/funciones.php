<?php
function altaDpto($name)
{
    $host = "localhost";
    $username = "root";
    $password = "rootroot";
    $dbname = "empleadosnn";

    try {
        $sql = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $connect = mysqli_connect($host, $username, $password, 'DPTO');

        mysqli_query($connect, 'ALTER TABLE category AUTOI_NCREMENT = 1');
        $connect = $sql->prepare("INSERT INTO DPTO (NOMBRE) VALUES (:name");

        $connect->bindParam(':name', $name);
        $connect->execute();

        // set the resulting array to associative
        $connect->setFetchMode(PDO::FETCH_NUM);
        $resultado = $connect->fetchAll();
    } catch (PDOException $e) {
        $err = "Error: " . $e->getMessage();

        $file_name = getcwd() . '/log.txt';
        $file = fopen($file_name, 'w');
        fwrite($file, $err);
    }
    $conn = null;
}
