<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_LAST_NAME']);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Food Court</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	





<section class="loginform cf">


<h2> Welcome to Food Court. Please log In to Continue. <h2>

		<form name="login" method="post" accept-charset="utf-8" action="login.php">
			<ul>
				<li>
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="Username" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				


</ul>	<div class="a">

                       <input type="submit" value="Login">

					   
	
	 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
		
		
					   
					   
</div>



	</form>
	</section>
	
</body>
</html>