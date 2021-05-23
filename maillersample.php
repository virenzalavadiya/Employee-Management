<?php
include 'connection.php';
include 'adminactive.php'; 
include 'getkey.php';

  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/phpprogramme/project/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/phpprogramme/project/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/phpprogramme/project/PHPMailer/src/SMTP.php';



    $to="abc@gmail.com";
    $sub="Regarding Your Company";
    $msg="Hii ".$x['Emp_name']." You are Employee Of Our Company \nUsername=".$x['Emp_name']." \nPassword=".$pass_sendmail."\nLink=<a href='http://localhost/programme/Task/signin.php'>";
    $headers="From:virenzalavadiya16@gmail.com";
    
    if(mail($to,$sub,$msg,$headers))
    {
     echo "successfully done";
    }   
    else
    {
        header("Location:error.php");    
    }


?>