<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Food Court</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
 	


<section class="loginform cf">


<h2> Welcome to Food Court. Please Register to Continue. <h2>

		<form name="reg" enctype="multipart/form-data" method="POST" action="Submit_register.php" >
			<ul>
				<li>
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="Username" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
					
					<li>
					<label for="email">e-mail</label>
					<input type="text" name="email" placeholder="e-mail" required></li>
					
					<li>
					<label for="location">Location</label>
					<input type="text" name="location" placeholder="Location" required></li>
				


</ul>	<div class="a" >

                       <input type="submit" value="Sign in" name="submit">

 
	   
</div>
<div class="msg" > 
<?php 
		if (!isset($_GET['remarks'])) {$remarks=""; }
else {$remarks=$_GET['remarks']; }
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	
		</div>


	</form>
	
	
	</section>
	
	

</body>
</html>