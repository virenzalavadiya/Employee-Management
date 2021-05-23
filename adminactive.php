<?php

include 'connection.php';
include 'getkey.php';

$q=mysqli_query($conn,"SELECT *from employee where Key_id='$key'");
$x=mysqli_fetch_array($q);


if($x['Role_id']==1)
{
    if($x['Activated'] == 0)
    {
        header("Location:signin.php");       
    }
  
}
else if($x['Role_id'] == 2)
{     
        echo "<script>alert('You are not able to access this account');</script>";
}
else
{
    header("Location:signin.php");       
}


?>