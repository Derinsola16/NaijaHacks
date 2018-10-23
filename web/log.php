
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quick Register Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<div class="signupform">
<h1>Quick Sign-in Form</h1>
	<div class="container">
		
		<div class="agile_info">
			<div class="w3_info">
						<h2>Login</h2>
						
						<div class="left margin">
							<form action="" method="post">
							<label>Email Address</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="email" placeholder="Email" required="" name="email"> 
							</div>
						</div>
						
						<div class="left margin">
							<label>Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Password" required="" name="password">
							</div>
						</div>
						        
							<button class="btn btn-danger btn-block" type="submit" name="button">Login<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >
								</form>
							<?php 

							$dbconn = new mysqli('localhost', 'root', '', 'signup');

							if ($dbconn->connect_error)
							 {
								die("Connection Failed: " . $dbconn->connect_error);
							 }
					if (isset($_POST['button'])) 
					{
 
						$sql = "SELECT * FROM `register` WHERE `Email`='{$_POST['email']}' AND `Password`='{$_POST['password']}' LIMIT 1";
								
						$result = $dbconn->query($sql);
						if ($result->num_rows > 0) 
						{
							session_start();
							$_SESSION['user'] = $result->fetch_assoc();

							header("location:index.html");
							//print_r($_SESSION['user']);
						}

						else
						{
								echo "Wrong Login Information";
						}
					}	

					
		
							mysqli_close($dbconn);

?>                
					
			</div>
		
				</div>
			</div>
			<div class="clear"></div>
			</div>
			
		</div>
		<div class="footer">

 <p>&copy; 2018 Quick Register form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p>
 </div>
	</div>
	</body>
</html>