<?php
 include 'connection.php';

    if(isset($_POST['submit']))
    {
        $emp_mail=$_POST['email'];
        $pass=$_POST['Password'];

        $q=mysqli_query($conn,"SELECT *FROM employee where Email='$emp_mail'");
        $x=mysqli_fetch_array($q);
        $vpass=password_verify($pass,$x['Password']);
        $emp=$x['Emp_name'];
        if($emp_mail==$x['Email'] && $vpass==1 && $x['Activated']==0)
        {
            $y=$x['Key_id'];
            $q=mysqli_query($conn,"UPDATE employee Set Activated=1 where Key_id='$y'");
            if($q)
            {
                if($x['Role_id']==1)
                {
                    header("Location:admindashboard.php?iskey=$y");
                }
                if($x['Role_id']==2)
                {
                    header("Location:employeedashboard.php?iskey=$y");
                }
            }
        }
        else
        {
            if($emp_mail==$x['Email'] && $vpass!=1)
            {
                echo '<script type="text/javascript">'; 
                echo "alert('Enter Valid Password...');"; 
                echo 'window.location.href = "signin.php";';
                echo '</script>';
            }
            else
            {
                echo '<script type="text/javascript">'; 
                echo "alert('$emp you are already logged in with this account..!!');"; 
                echo 'window.location.href = "signin.php";';
                echo '</script>';
            }
        }	
    }
    else
    {
        echo "Sorry...plese first Submit the data ";
    }
    
?>