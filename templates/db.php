<?php
    // Enter your host name, database username, password, and database name.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";
    try {
        //code...
         // If you have not set database password on localhost then set empty.
     $con = mysqli_connect($servername,$username,$password,$database);
    //$con = new mysqli($servername,$username,$password,$database);
    echo "connected";
    
    
    } catch (\Throwable $th) {
        //throw $th;
        echo "error" . $th;
    }
   
?>