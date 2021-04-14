<?php
	require_once 'connect.php';
	session_start();
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `official` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['user_id']=$fetch['user_id'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='admin.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='adminindex.php'</script>";
		}
		
	}

?>