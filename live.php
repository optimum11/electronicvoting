<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="images/logo1.jpg">
<h1 style='background-color: yellow; text-align:center'>FACULTY OF LIFE SCIENCE ELECTION LIVE UPDATE</h1>
<?php
header("Refresh:1");
require_once 'connect.php';
$sql="select count('id') from vote ";
$sql1="select count('level') from vote WHERE level='biochemistry'" ;
$sql2="select count('level') from vote WHERE level='microbiology'" ;
$sql3="select count('level') from vote WHERE level='optometry'" ;
$sql4="select count('level') from vote WHERE level='plantbiology'" ;
$sql5="select count('level') from vote WHERE level='zoology'" ;



$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);

$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$row3=mysqli_fetch_array($result3);
$row4=mysqli_fetch_array($result4);
$row5=mysqli_fetch_array($result5);

?>
<center><h3 style='color:teal'>Department Of Biochemistry</h3></center>
<?php
echo "<center><h3 class='text-success'>" .$row1[0]."</h3></center>";
?>

<center><h3 style='color:orange'>Department of Microbiology</h3></center>
<?php
echo "<center><h3 class='text-success'>" .$row2[0]."</h3></center>";
?>

<center><h3 style='color:purple'>Department of Optometry </h3></center>
<?php
echo "<center style='color:black'><h3 class='text-success'>" .$row3[0]."</h3></center>";
?>

<center><h3 style='color:red'>Department of Plant Biology</h3></center>
<?php
echo "<center><h3 class='text-success'>" .$row4[0]."</h3></center>";
?>
<center><h3 style='color:red'>Department of zoology</h3></center>
<?php
echo "<center><h3 class='text-success'>" .$row5[0]."</h3></center>";
?>


<center><h1 style='color:blue'>Total Votes Cast</h1></center>
<?php
echo "<center><h1 class='text-success'>" .$row[0]."</h1></center>";
?>
<pre><h3> Numbers of Accredited Voters Per Departments
           Biochemistyr: 250
           Microbiology: 400
           plantbiology: 300
           Optometry: 140
           Zoology: 300
            </h3></pre>
            <h2>Total Numbers of Eligible Voters: 2500</h2>
            <style>
            h2{color:blue}</style>
</body>
</html>