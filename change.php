<?php

    include 'connection.php';
    include 'getkey.php';
    if(isset($_POST['submit']))
    {
        
        $ipass=$_POST['inputpassword'];
        $pass=password_hash($ipass,PASSWORD_DEFAULT);
        $q=mysqli_query($conn,"UPDATE employee SET Password='$pass',Activated=0 where Key_id='$key'");
        $emp_name=$x['Emp_name'];

        if($q)
        {
            $to=$x['Email'];
            $sub="Regarding Password Reset";
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
                        <br>you have successfullly changed your password 
                        <br>Please check it,and login once with new password
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
            $headers .= 'From: Admin <passwordreset@blah.co.uk>' . "\r\n";
            if(mail($to,$sub,$msg,$headers))
            {
                header("Location:signin.php?iskey=$key");
            }
            else{
                header("Location:error.php");    
            }

        }
        else
        {
            echo "<script>alert('This User Account Doesn't Exist...')</script>";
        }
    }