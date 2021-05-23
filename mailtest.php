<?php
include 'connection.php';
    $to="jaiminantala1405@gmail.com";
    $sub="Regarding Your Company";
    $msg="Hii You are Employee Of Our Company";
    $headers="From:virenzalavadiya16@gmail.com.com";
    
    if(mail($to,$sub,$msg,$headers))
    {
       header("Location:viewemployee.php?iskey=$key");
    }   
    else
    {
        header("Location:error.php");    
    }


?>