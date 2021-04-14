<?php
    // always start session and verify before and html code
    // this prevents user from going directly to url without login
    session_start();
    include_once("connect.php");
    
    // verify that user has voted for governor then store in session
    if(!isset($_POST["hon"])){
        header("Location: hon.php");

    $query = mysqli_query($conn, "SELECT * FROM `criminology` WHERE `level` = '$level'") or die(mysqli_error());
    $fetch = mysqli_fetch_array($query);
    $level = $fetch['level'];
    if ($level == 100)
    {echo "<script>alert('kindly vote for your SRC candidate')</script>";
        echo "<script>window.location='one.php'</script>";
    
    }
}

    
?>