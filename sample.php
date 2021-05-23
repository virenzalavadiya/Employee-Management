<?php
include 'connection.php';
include 'getkey.php';

$q=mysqli_query($conn,"SELECT *From employee where Key_id='846595001604300946'");
$x=mysqli_fetch_array($q);
$emp_name=$x['Emp_name'];
$des=$x['Designation'];

if($q)
{
$to="miteshsukh0057@gmail.com";
$sub="Most Welcome to Your Company";
$msg = '
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body style="
              font-size: 18px;
              background-image: linear-gradient(45deg,#efefef,#e4e4e4db);
              border: 0px solid black;
              border-radius: 5px;
              color: #2f2f2f;
              font-family: Google Sans;
              padding: 10px;
              margin: 10px;
              margin-right: 20px;
            ">
            Hii '.$emp_name.',
            <br>Congratulations You cracked the interview so You became a family Of Our Company  
            <br>Below given all the information about to reach your profile
            <br>Username='.$emp_name.'  
            <br>Password='.$pass_sendmail.'
            <br>Designation='.$des.' 
            <br>Link=<a href="http://localhost/phpprogramme/company%20management/signin.php">http://localhost/phpprogramme/company%20management/signin.php</a>
            <br>Thanks & Regards
  </body>

</html>

';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html; charset=iso-8859-1"."\r\n"; "X-Mailer: php".
$headers .= 'From: Password Reset <passwordreset@blah.co.uk>' . "\r\n";
if(mail($to,$sub,$msg,$headers))
{
  echo "successfully mail sent";
}
else{
  echo "not reach";
}
}
?>
