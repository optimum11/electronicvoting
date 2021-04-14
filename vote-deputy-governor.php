<?php
    // always start session and verify before and html code
    // this prevents user from going directly to url without login
    session_start();
    if(empty($_SESSION["name"]) || empty($_SESSION["usn"])){
        header('Location: index.php');
    }
    //stopping refresh
    //if(!empty($_POST) && $_SERVER ['REQUEST_METHOD'] =='POST'){$data =//processing codes here unset $data;}
    
    // verify that user has voted for governor then store in session
    if(!isset($_POST["governor"])){
        header("Location: vote-president.php");
    }else{
        $_SESSION["vote-governor"] = $_POST["governor"];
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
        <h3 style='color:blue;'>VOTE VICE PRESIDENT</h3></center>
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

    <form action="vote-general-secretary.php" method="post">
        <div>
        <img src="images/guy.jpg"><label for="deputy-governor-1"><input type="radio"  required name="deputy-governor" required id="deputy-governor-1" value="Rema">Rema</label>
        </div>
        <br> 
        <div>
        <img src="images/guy.jpg"><label for="deputy-governor-2"><input type="radio"  required name="deputy-governor" required id="deputy-governor-2" value="Omah Lay">Omah Lay</label>
        </div>
        <br>
        <div>
        <img src="images/guy.jpg"> <label for="deputy-governor-3"><input type="radio"  required name="deputy-governor" required id="deputy-governor-3" value="Fireboy">Fireboy</label>
        </div>
        <br>
        <div>
        <img src="images/guy.jpg"> <label for="deputy-governor-4"><input type="radio"  required name="deputy-governor" required id="deputy-governor-4" value="Undecided">Undecided</label>
        </div>
        <br>
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