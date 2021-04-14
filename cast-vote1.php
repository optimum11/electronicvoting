<?php
    // to finally send chosen options to the database
    session_start();
    session_destroy();

    // verify that all session variables are set
    if(isset($_SESSION["name"]) && isset($_SESSION["usn"]) && isset($_SESSION["vote-governor"]) && isset($_SESSION["vote-deputy-governor"])  && isset($_SESSION["vote-general-secretary"]) ){
        // import connection to database
        include_once("connect.php");
        $query = mysqli_query($conn, "SELECT * FROM `criminology` WHERE `matric_number`='$_SESSION[usn]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        $name = $fetch['name'];
        $level = $fetch['level'];
        $usn = $_SESSION["usn"];
        $gov = $_SESSION["vote-governor"];
        $dep_gov = $_SESSION["vote-deputy-governor"];
        $gen_sec = $_SESSION["vote-general-secretary"];
        $fin_sec = $_SESSION["vote-financial-secretary"];
        $welfare= $_SESSION["vote-welfare"];
        $social= $_SESSION["vote-social"];
        $sport= $_SESSION["vote-sport"];
        $pro= $_SESSION["vote-pro"];
        $ags= $_SESSION["vote-ags"];
        
        $time = date("Y-m-d H:i:s");

        // sql query to send vote to database
        $cast_vote_query = "INSERT INTO vote (name,level,governor,deputy_governor,general_sec,financial_sec,welfare,social,sport,pro,ags,time) VALUES ('$usn','$level','$gov','$dep_gov','$gen_sec','$fin_sec','$welfare','$social','$sport','$pro','$ags','$time')";
    }else{
        session_destroy();
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Voting System</title>
</head>
<body>
    <?php
        if($conn->query($cast_vote_query)){
            echo "<script>alert('Congratulations you have voted successfully!')</script>";
           
            echo "<script>window.location='index.php'</script>";

            echo "<script>(window.history.replacestate ) { window.history.replacestate(null,null, window.location.'index.php');}</script>";
        }    
    ?>
     <script type="text/javascript">if (window.history.replacestate ) { window.history.replacestate(null,null, window.location.href);}
     </script>
</body>
</html>