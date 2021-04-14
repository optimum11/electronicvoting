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
			<a class="navbar-brand" href="#">Avento</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center><h3 class="text-primary"> FACULTY OF LIFE SCIENCE ELECTION</h3>
        <h3 style='color:blue;'>PRESIDENT</h3></center>
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

    <form action="vote-deputy-governor.php" method="post">
        <div>
        <img src="images/guy.jpg"><label for="governor-1"><input type="radio" required name="governor" id="governor-1" value="Wizkid" required>Wizkid Oladayo (WIZZY)</label><br> <br>
        </div>
        <div>
        <img src="images/guy.jpg"><label for="governor-2"><input type="radio" required name="governor" id="governor-2" value="Davido"required>Davido Adeleke (OBO)</label><br> <br>
        </div>
        <div>
        <img src="images/guy.jpg"> <label for="governor-3"><input type="radio" required name="governor" id="governor-3" value="BurnaBoy"required>Burnaboy Jackson (GRACE)</label><br> <br>
        </div>
        <div>
       <label for="governor-4"><input type="radio" required name="governor" id="governor-4" value="Undecided" required>Undecided</label><br> <br>
        </div>
        <div>
            <input type="submit" value="NEXT">
        </div>
    </form>
    </center>
    <h3>Voter:</h3>
			<?php
				require'connect.php';
			
				
				$query = mysqli_query($conn, "SELECT * FROM `criminology` WHERE `matric_number`='$_SESSION[usn]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				
				echo "<h5 class='text-success'>".$fetch['name']."</h5>";
				
			?>
    </div>
	</div>
    <script type="text/javascript">if (window.history.replacestate ) { window.history.replacestate(null,null, window.location.href);}
     </script>
</body>
</html>