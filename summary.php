<?php

    // always start session and verify before and html code
    // this prevents user from going directly to url without login
    session_start();
    if(empty($_SESSION["name"]) || empty($_SESSION["usn"])){
        header("Location: index.php");
    }
    
    // verify that user has voted for deputy governor then store in session
    if(!isset($_POST["ags"])){
        header("Location: vote-pro.php");
    }else{
        $_SESSION["vote-ags"] = $_POST["ags"];
    }
    ?>
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Avento</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center><h3 class="text-primary">FACULTY OF LIFE SCIENCE ELECTION</h3>
        <h3 style='color:blue;'>VOTES PREVIEW</h3></center>
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

   
    
    <h4>President: <?php echo $_SESSION["vote-governor"]; ?></h4>
    <h4>Deputy President: <?php echo $_SESSION["vote-deputy-governor"]; ?></h4>
    <h4>General Secretary: <?php echo $_SESSION["vote-general-secretary"]; ?></h4>
    <h4>Financial Secretary: <?php echo $_SESSION["vote-financial-secretary"]; ?></h4>
    <h4>Welfare Director: <?php echo $_SESSION["vote-welfare"]; ?></h4>
    <h4>Social Director: <?php echo $_SESSION["vote-social"]; ?></h4>
    <h4>Sport Director: <?php echo $_SESSION["vote-sport"]; ?></h4>
    <h4>PRO: <?php echo $_SESSION["vote-pro"]; ?></h4>
    <h4>AGS: <?php echo $_SESSION["vote-ags"]; ?></h4>
    <pre><a href="cast-vote1.php">CONFIRM</a>                   <a href="cancel-vote.php">CANCEL</a></pre>
    </center>
    <h5>Voter:</h5>
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