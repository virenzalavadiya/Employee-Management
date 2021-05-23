<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>   
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header ">
				<h3>LOG IN</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><a href="#"><i class="fab fa-facebook-square"></i></a></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
            <form action="login.php" method="post">
            	<div class="col-sm-11 pl-5">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="email" maxlength="30" class="form-control" id="name1" name="email"  placeholder="Email" required></input>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="password" name="Password"  placeholder="password" title="it must contain one upper case letter,one lower case and one special character" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></input>
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit" id="submit1" value="Log In" class="btn float-right login_btn ">
					</div>
					</div>
			
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				
				</div>
				<div class="d-flex justify-content-center">
					<a href="forgotpassword.php">Forgot your password?</a>
				</div>
			</div>
            </form>
		</div>
	</div>
</div>
</body>
</html>