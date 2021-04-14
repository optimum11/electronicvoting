<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "voting";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed");
    }
    function isLoggedIN()
    {
        if (isset($_SESSION['user']))  {
            return true;
        }else{
            return false;
        }
    }
?>