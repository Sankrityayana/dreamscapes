<?php


    //host
    $host = "localhost";

    //dbname
    $dbname = "dreamscapes";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user. $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>