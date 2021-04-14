<?php
    // start a session
    session_start();

    // first get the post variables
    $usn = $_POST["username"];
    $pwd = $_POST["password"];

    // make sure variables are not empty
    if(isset($username) || isset($pwd)){
        // set connection to DB by import
        include_once("connect.php");

        // to verify that password matches username
        // get the password for the username from the database
        $get_user_query = "SELECT password, name FROM criminology WHERE matric_number = '$usn'";
        
        if($query_result = $conn->query($get_user_query)){
            $result_row = $query_result->fetch_assoc();
            $user_pwd_db = $result_row["password"];
            // if password in db is the same as password entered, verify by setting session and redirect
            if($pwd === $user_pwd_db){
                $_SESSION["name"] = $result_row["name"];
                $_SESSION["usn"] = $usn;

                echo "<script>alert('Login Successfully! Proceed To Cast Your Vote')</script>";
                $query = mysqli_query($conn, "SELECT * FROM `vote` WHERE `name` = '$usn'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
                
               $row1 = mysqli_num_rows($query);
            
                if($row1 > 0){
                $_SESSION['name']=$fetch['name'];
                echo "<script>alert('You cannot vote more than once')</script>";
                        echo "<script>window.location='index.php'</script>";
                    
                    }
			echo "<script>window.location='vote-president.php'</script>";
            }else{
                echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='index.php'</script>";
            }
        }
    }else{
        echo "You need to enter a Username and Password";
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
    
</body>
</html>