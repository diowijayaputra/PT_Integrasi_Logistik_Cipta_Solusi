<?php

function ilcs()
{

    $host = "localhost:3306";
    $user = "root";
    $password = "";
    $db = "ilcs";

    $dbconn = mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_errno()) {
        echo "Koneksi Database Gagal" . mysqli_connect_errno();
    } else {
        $dbconn->autocommit(TRUE);
        return $dbconn;
    }
}
