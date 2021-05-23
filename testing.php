<?php
include 'connection.php';
    $to="virenzalavadiya01@gmail.com";
    $sub="Regarding Your Company";
    $msg="Hii You are Employee Of Our Company";
    $headers="From:virenzalavadiya16@gmail.com.com";
    
    if(mail($to,$sub,$msg,$headers))
    {
       echo "wonderful";
    }   
    else
    {
        echo "not wonderful";
    }


?>