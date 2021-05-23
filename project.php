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
    	$pname=$_POST['project_name'];
        $ptype=$_POST['project_type']; 
        $start=$_POST['start_date'];
        $end=$_POST['end_date'];

        $y=mysqli_query($conn,"SELECT * FROM project where Project_name = '$pname'  ");
        $z=mysqli_fetch_array($y);
        
        if(mysqli_num_rows($y) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This project name is already Exist so please use diffrent one...!!!');"; 
            echo 'window.location.href = "addproject.php?iskey='.$key.'";';
            echo '</script>';
        }
        else{
            $q=mysqli_query($conn,"INSERT into project(Client_type,Project_name,Project_type,Start_project,End_project,Created)values('$interest','$pname','$ptype','$start','$end',CURRENT_TIMESTAMP())");
            if($q)
            {
                header("Location:viewproject.php?iskey=$key");
            }
        }
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo "alert('Error is detected,please try again...!!!');"; 
        echo 'window.location.href = "addrole.php?iskey='.$key.'";';
        echo '</script>';    }
?>