<?php
    include 'connection.php';
    include 'getkey.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>   
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
				<h3>CHANGE PASSWORD</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><a href="#"><i class="fab fa-facebook-square"></i></a></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
            <form action="change.php?iskey=<?php echo $key;?>" onsubmit="return checkForm(this);" method="post">
            	<div class="col-sm-11 pl-5">
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="password1" name="inputpassword"  placeholder="new password" title="it must contain one upper case letter,one lower case and one special character" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></input>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="password2" name="repeatpassword"  placeholder="confirm password" title="it must contain one upper case letter,one lower case and one special character" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></input>
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit" id="submit1" value="Submit" class="btn float-right login_btn ">
					</div>
					</div>
			
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				
				</div>
			</div>
            </form>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
function checkForm(form)
{
    if( form.inputpassword.value != form.repeatpassword.value) {
    alert("Error: Please check that you've entered and confirmed your password!");
    form.inputpassword.focus();
    return false;
  }
  else{
    return true;
  }
}
</script>


</html>