<?php

    include 'connection.php';
    include 'getkey.php';
    if(isset($_POST['submit']))
    {
        session_start();
        $_SESSION['email']=$_POST['Email'];
        $emp_mail=$_POST['Email'];
        $q=mysqli_query($conn,"SELECT * FROM employee where Email='$emp_mail'");
        $x=mysqli_fetch_array($q);
        $emp_name=$x['Emp_name'];
        $keyid=$x['Key_id'];
        if(mysqli_num_rows($q))
        {
        
            $to=$x['Email'];
            $sub="Regarding Forgot Password";
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
                        <br>You can change your password via below link click on that and Change it
                        <br>Your Forget Password Link=<a href="http://localhost/phpprogramme/company%20management/changepassword.php?iskey='.$keyid.'">
                                http://localhost/phpprogramme/company%20management/changepassword.php?iskey='.$keyid.'
                                </a>
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
                $u=mysqli_query($conn,"UPDATE employee SET Activated=1 where Key_id='$key'");
                header("Location:show_gmail_msg.php");
            }
            else{
                header("Location:error.php");                        
            }
        }
        else
        {
            echo "<script>confirm('Your account doesn't Exist...')</script>";
        }
    }
    ?>