<?php
include 'connection.php';
include 'adminactive.php';
include 'getkey.php';

$q=mysqli_query($conn,"SELECT *From employee where Emp_name='$Ass'");
$x=mysqli_fetch_array($q);
$emp_name=$x['Emp_name'];

if($q)
{
    $q1=mysqli_query($conn,"SELECT *from task1 where Ass='$Ass'");
    $x1=mysqli_fetch_array($q1);
    $project_name=$x1['Project_name'];
    $task=$x1['Task'];
    $start_date=$x1['Start_date'];
    $end_date=$x1['End_date'];

    $to=$x['Email'];
    $sub="Regarding Task";
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
                <br>Now,You get some task which is sent From Our Higher Authorities 
                <br>Project name : '.$project_name.'
                <br>Task : '.$task.'
                <br>Start_date : '.$start_date.'
                <br>End_date : '.$end_date.'
                <br>I hope you Complete Your Task As Per given Time"; 
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
        header("Location:viewtask.php?iskey=$key");
    }
    else{
        header("Location:error.php");    
    }


}

?>