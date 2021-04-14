<?php
    // always start session and verify before and html code
    // this prevents user from going directly to url without login
    session_start();
    if(empty($_SESSION["name"]) || empty($_SESSION["usn"])){
        header("Location: index.php");
    }
?>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Avento</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center><h3 class="text-primary">DEPARTMENT OF CRIMINOLOGY</h3>
        <h3 style='color:blue;'>VOTE SRC</h3></center>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
        
			
		
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Voting System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
<center>

<form action="two.php" method="post">
      <h1 style="background-color: blue; color: white;"> 
       <label for="governor">Adebayo</label><strong><input name="vote" type="radio" id="governor" value="adebayo" required></strong></h1><br><br>
        <h1 style="background-color:red; color: white;">
            <img src="vp.jpg"><label for="">Azeez</label><input name="vote" type="radio" value="azeez" required></h1><br><br>
			<h1 style="background-color: green; color: white;">
			<label for="">Adekunle</label><input name="vote" type="radio" value="adekunle" required></h1><br><br>
				<input name="submit" id="submit-btn" type="submit" value="Submit vote">
    </form>
    </center>
    <h3>Voter:</h3>
			<?php
				require'connect.php';
			
				
				$query = mysqli_query($conn, "SELECT * FROM `criminology` WHERE `matric_number`='$_SESSION[usn]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				
                echo "<h5 class='text-success'>".$fetch['name']."</h5>";
                $name = $fetch['name']
				
			?>
    </div>
	</div>
			
	<?php
	require_once 'connect.php';
	  
		
if(isset($_POST["submit"])){
                 $voted = $_POST["vote"];
                 
				$voted = $voted{  
				$insert_sql = "INSERT INTO records (name,voted) VALUES ('$name','$voted')"};
				      if($conn->query($insert_sql)){
                        echo "<script>alert('you have successfully voted for your SRC candidate')</script>";
                      echo "<script>window.location='index.php'</script>";
                        
				       } else{
						echo "Could not insert.";
					   } 
	}		   
			   
	
			
	 ?>



</body>	
</html>