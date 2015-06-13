<?php
session_start();
	require('connection.php');
    // If the values are posted, insert them into the database.
    
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 $location = $_POST['location'];
        $query = "INSERT INTO `user` (username, password, email, location) VALUES ('$username', '$password', '$email','$location')";
        mysql_query($query);
        header("location: register.php?remarks=success");
		//mysql_close($con);
    ?>