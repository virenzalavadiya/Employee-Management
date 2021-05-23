<?php
     include 'connection.php';
    $key = urldecode($_GET['iskey']);
    $key = str_replace(" ", "", $key);
     include 'getkey.php';
    
    if($Role_ed)
    {
        $q1=mysqli_query($conn,"DELETE from role where Role_id=$Role_ed");
        header("Location:viewrole.php?iskey=$key");
    }
    else if($Emp_ed)
    {
        $q2=mysqli_query($conn,"DELETE from employee where Emp_name='$Emp_ed'");
        $q2=mysqli_query($conn,"DELETE from task1 where Ass='$Emp_ed'");
        header("Location:viewemployee.php?iskey=$key");
    }
    else if($Client_ed)
    {
        $q3=mysqli_query($conn,"DELETE from client where Id='$Cid'");
        header("Location:viewclient.php?iskey=$key"); 
    }
    
    else if($Project_ed)
    {
        $q4=mysqli_query($conn,"DELETE from project where Project_name='$Project_ed'");
        $q4=mysqli_query($conn,"DELETE from task1 where Project_name='$Project_ed'");
        header("Location:viewproject.php?iskey=$key");
    }
   
    else if($Task_ed)
    {
     $q5=mysqli_query($conn,"DELETE from task1 where Id='$Taid'");
       header("Location:viewtask.php?iskey=$key");
    }  
    else
    {
        header("Location:Error_msg.php?iskey=$key");
    } 
?>















    // if($_GET['isr'] && $key)
    // {
    //     $Role_ed = urldecode($_GET['isr']);
    //     $Role_ed = str_replace(" ", "", $Role_ed);
    //     mysqli_query($conn,"DELETE from role where Role_id=$Role_ed");
    //     header("Location:viewrole.php?iskey=$key");

    // }
    // else if($_GET['ise'] && $key)
    // {
    //     $Emp_ed = urldecode($_GET['ise']);
    //     $Emp_ed = str_replace(" ", "", $Emp_ed);
    //     mysqli_query($conn,"DELETE from role where Role_id=$Role_ed");
    //     $q2=mysqli_query($conn,"DELETE from employee where Emp_name='$Emp_ed'");
    //     $q2=mysqli_query($conn,"DELETE from task1 where Ass='$Emp_ed'");
    //     header("Location:viewemployee.php?iskey=$key");
    // }
    // else if($_GET['isc'] && $key)
    // {
    //     $Client_ed = urldecode($_GET['isc']);
    //     $Client_ed = str_replace(" ", "", $Client_ed);
    //     mysqli_query($conn,"DELETE from client where Client_name='$Client_ed'");
    //     header("Location:viewclient.php?iskey=$key");

    // }
    // else if($_GET['isp'] && $key)
    // {
    //     $Project_ed = urldecode($_GET['isp']);
    //     $Project_ed = str_replace(" ", "", $Project_ed);
    //     mysqli_query($conn,"DELETE from project where Project_name='$Project_ed'");
    //     $q4=mysqli_query($conn,"DELETE from task1 where Project_name='$Project_ed'");
    //     header("Location:viewproject.php?iskey=$key");

    // }
   
   
    // else if($_GET['ist'] && $key)
    // {
    //     $emp_name=$_GET['AssTo'];
    //     echo $emp_name;
    //     $Task_ed = urldecode($_GET['ist']);
    //     $Task_ed = str_replace(" ", "", $Task_ed);
    //     echo $Task_ed;
    //     mysqli_query($conn,"DELETE from task1 where Task='$Task_ed' && Ass='$emp_name'");
    //     header("Location:viewtask.php?iskey=$key");
    // }
    //  else{}
    // {
    //     header("Location:Error_msg.php?iskey=$key");
    // } 
   