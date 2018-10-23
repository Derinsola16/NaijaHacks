<!DOCTYPE html>
<html lang="en">
<head>
<title>Quick Register Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylessheet" type="text/css" media="all">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<div class="signupform">
<h1>Quick Register Form</h1>
	<div class="container">
		
		<div class="agile_info">
			<div class="w3_info">
				<h2>Register Here</h2>
						<form action="" method="post">
						<div class="left margin">
							<label>First Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="First Name" required="" name="firstname"> 
							</div>
						</div>
						<div class="left">
							<label>Last Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="Last Name" required="" name="lastname"> 
							</div>
						</div>
						<div class="left margin">
							<label>Email Address</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="email" placeholder="Email" required="" name="email"> 
							</div>
						</div>
						<div class="left">
							<label>Phone Number</label>
							<div class="input-group">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<input type="text" placeholder="Phone Number" required="" name="number">
							</div>
						</div>
						<div class="left margin">
							<label>Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Password" required="" name="password">
							</div>
						</div>
						
						<div class="clear"></div>
							<input type="checkbox" value="remember-me" /> <h4> I agree to the terms & contidions </h4>        
							<button class="btn btn-danger btn-block" type="submit" name="button">Register Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >                
					</form>

<?php 

							$dbconn = new mysqli('localhost', 'root', '', 'signup');

							if ($dbconn->connect_error)
							 {
								die("Connection Failed: " . $dbconn->connect_error);
							 }
					if (isset($_POST['button'])) 
					{
 
					$sql = "INSERT INTO register(FirstName,LastName,Email,PhoneNum,Password)
					 values('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["number"]."','".$_POST["password"]."')";

								if ($dbconn->query($sql) === TRUE) 
								{
									header('Location: index.html');
									//echo "Record inserted";
								}

								else
								{
										echo "Error: " . $sql . "<br/>" . $dbconn->error;
								}
					}	

					// if (isset($_POST['password'])) 
					// 		{
					// 			$pass = $_POST['password'];
					// 			$confirm = $_POST['confirmpass'];
					// 			if ($pass == $confirm) {
					// 				//echo "Success";
					// 			} 
					// 			//else{echo "failed";}
					// 		}
		
							mysqli_close($dbconn);

?>

			</div>
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Already Registered?</h3>
					<p> Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
					<a href="log.php" class="btn">Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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