<?php
    $serer = "localhost";
    $username = "root";
    $password = "";
    $dbname = "socio_marker";
    $conn = mysqli_connect($serer,$username,$password,$dbname); 
    if(!$conn)
    {
        die("Could not connect to the database - Error:  ".mysqli_connect_error());
    }
?>