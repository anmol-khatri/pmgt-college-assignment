<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Website</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="dropdown.js"></script>

</head>


<body>
	<!--Display validatio error -->
	<?php
		include ('errors.php');
		?>

	<section id="signup">
		<div class="signup-box">
			<h1>REGISTRATION FOR USER</h1>	
            <form action="signup.php" method="post">
						<div class="textbox">
							<i class="fa fa-user"></i>
                            <input type="text"  placeholder="username" name="username" value="" required>
							
						</div>
						
						<div class="textbox">
							<i class="fa fa-lock"></i>
                           <input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                           
						</div>

						<div class="textbox">
							<i class="fa fa-lock"></i>
                           <input type="password" placeholder="Enter Password Again" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                           
						</div>

						<div class="textbox">
							<i class="fa fa-at"></i>
                           <input type="email" placeholder="Email" name="email" value="">
                           
						</div>

						<div class="dropdown">
							<div class="select">
								<span class="selected">BUTCHERS</span>
								<div class="caret"></div>
							</div>
							<ul class="menu">
								<li class="active">BUTCHERS</li>
								<li>BAKERY</li>
								<li>FISH MONGER</li>
								<li>GREENGROCER</li>
								<li>DELICATESSEN</li>
							</ul>	
						</div>
						
						
					<input class="button" type="submit" name="register" value="Sign up">
				</form>
                
		</div>	
	</section>
</body>
</html> 