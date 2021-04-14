<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center;  background-color: purple; color: white; ">ELECTION RESULT FOR SOCIAL DIRECTOR</h1>
<?php
require_once 'connect.php';
$sql="select count('id') from vote";
$sql1="select count('id') FROM vote WHERE social='Funke'";
$sql2="select count('id') FROM vote WHERE social='Toyin'";
$sql3="select count('id') FROM vote WHERE social='johnson'";
$sql4="select count('id') FROM vote WHERE social='tola'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
/*echo "<h2 class='text-success'>".$row[0]."</h2>";*/
?>
<h1 style="background-color: blue; color: white;">Funke Akindele</h1>
<?php
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
echo "<h2 class='text-success'>".$row1[0]."</h2>";
?>

<h1 style="background-color:red; color: white;">Toyin Abraham</h1>
<?php
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);
echo "<h2 class='text-success'>".$row2[0]."</h2>";
?>

<h1 style="background-color:tomato; color: white;">Mercy Johnson</h1>
<?php
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($result3);
echo "<h2 class='text-success'>".$row3[0]."</h2>";
?>

<h1 style="background-color: green; color: white;">Omotola Jolade</h1>
<?php
$result4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_array($result4);
echo "<h2 class='text-success'>".$row4[0]."</h2>";
mysqli_close($conn);
?>


<center><h1 style='color:blue'>Total Votes Cast</h1></center>
<?php
echo "<center><h1 class='text-success'>" .$row[0]."</h1></center>";
?>


         <center> <a href="admin.php"><input type="button" value='Home'> </center>    
    

</body>
</html>