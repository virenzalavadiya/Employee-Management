<?php
include 'connection.php';


if($q)
{
    $to="virenzalavadiya35@gmail.com";
    $sub="Most Welcome to Your Company";
    $msg = 'hello ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=iso-8859-1"."\r\n"; "X-Mailer: php".
    $headers .= 'From: Profile  <admin@blah.co.uk>' . "\r\n";
    if(mail($to,$sub,$msg,$headers))
    {
echo "successfully done";    }
    else{
        echo "successfully not done";
    }
    

}

?>