<?php
 include 'connection.php';
 include 'getkey.php';

	if(isset($_POST['submit']))
    {
		session_start();
        $interest=$_POST['interest1'];
        $country=$_POST['country'];
        if($interest!="India")
        {
            $interest=$country;
        }
        $cemail=$_POST['Email'];
        $cname=$_POST['client_name'];

        $y=mysqli_query($conn,"SELECT * FROM client where Client_name = '$cname' or Client_email = '$cemail' ");
        $z=mysqli_fetch_array($y);
        
        if(mysqli_num_rows($y) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This client name or email is already Exist...!!!try with diffrent one');"; 
            echo 'window.location.href = "addclient.php?iskey='.$key.'";';
            echo '</script>';
        }
        else{
            $q=mysqli_query($conn,"INSERT into client(Client_type,Client_email,Client_name,Created)values('$interest','$cemail','$cname',CURRENT_TIMESTAMP())");
            if($q)
            {
                header("Location:viewclient.php?iskey=$key");
            }
        }
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo "alert('Error is detected,please try again...!!!');"; 
        echo '</script>';
    }
?>