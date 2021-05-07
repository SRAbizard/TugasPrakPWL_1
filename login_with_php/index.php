<?php
	include('facebook_login.php');
?>

<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="content">
				<form class="content-form" action="login_biasa.php" method="post">
					<div class="container" style="background-color: #177480;">
                    	<h1>Welcome</h1>
                	</div>
                	<div class="container">
                    	<label for="email">Username</label><br>
                    	<input type="text" placeholder="Masukkan Username" name="username" required><br>
                    	<label for="password">Password</label><br>
                    	<input type="password" placeholder="Masukkan Password" name="password" required><br>

            			<input type="submit" value="Login">

						<?php 
							if(isset($facebook_login_url)){
								echo $facebook_login_url;
							} else {
								header('location: homepage.php');
							}
						?>
                	</div>                
            	</form>
    	</div>
	</body>
</html>