<?php

function Database()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "lap5";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
