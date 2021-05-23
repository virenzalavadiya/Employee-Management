<?php
include 'connection.php';
include 'adminactive.php'; 
include 'getkey.php';

$q=mysqli_query($conn,"SELECT *From employee where Key_id='$kid'");
$x=mysqli_fetch_array($q);
$emp_name=$x['Emp_name'];
$des=$x['Designation'];

if($q)
{
    $to=$x['Email'];
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
                box-shadow: 10px 10px 5px #aaaaaa;
                padding: 10px;
                margin: 10px;
                margin-right: 20px;
                ">
                Hii '.$emp_name.',
                <br>Congratulations You cracked the interview so You became a family Of Our Company 
                <br>i hope you will show me your best capability and will give 100% as much as you can
                <br>Below given all the information about to reach your profile
                <br>Username='.$emp_name.'  
                <br>Password='.$pass_sendmail.'
                <br>Designation='.$des.' 
                <br>Link=<a href="http://localhost/phpprogramme/company%20management/signin.php">http://localhost/phpprogramme/company%20management/signin.php</a>
                <br>Thankyou for join us 
                <br><br>Thanks & Regards
                <center>
                <br><h6>Contact us : virenzalavadiya16@gmail.com
                <br>© 2020 RS Group of Companies pvt Ltd. All Rights Reserved.</h6>
                </center>
    </body>
    </html>
    ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=iso-8859-1"."\r\n"; "X-Mailer: php".
    $headers .= 'From: Profile  <admin@blah.co.uk>' . "\r\n";
    if(mail($to,$sub,$msg,$headers))
    {
        header("Location:viewemployee.php?iskey=$key");
    }
    else{
        header("Location:error.php");    
    }
    

}

?>