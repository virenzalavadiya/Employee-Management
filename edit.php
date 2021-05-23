<?php
    include 'connection.php';
    include 'getkey.php';
    if(isset($_POST['rsubmit']))
    {
        $rid=$_POST['role_id'];
        $rname=$_POST['role_name'];
       
        $q=mysqli_query($conn,"UPDATE role set Role_id=$rid,Role_name='$rname' where Role_id=$Role_ed");
        if($q)
        {
            header("Location:viewrole.php?iskey=$key");
        }
    
    }
    if(isset($_POST['esubmit']))
    {
        
        $ename=$_POST['name'];
        $epass=$_POST['password'];
        $epass=password_hash($epass,PASSWORD_DEFAULT);
        $eph=$_POST['phone'];
        $edes=$_POST['designation'];

     
        $p=mysqli_query($conn,"SELECT * FROM employee where Ph_no = '$eph' ");
        if(mysqli_num_rows($p) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This phone no is already Exist...');"; 
            echo 'window.location.href = "updateemployee.php?ise='.$ename.'&iskey='.$key.'";';
            echo '</script>';
        }
        else{  
            $pass=password_hash($pass,PASSWORD_DEFAULT);
            $q=mysqli_query($conn,"UPDATE employee set Emp_name='$ename',Password='$epass',Ph_no='$eph',Designation='$edes' where Emp_name='$Emp_ed'");
            if($q)
            {
                $q=mysqli_query($conn,"UPDATE task1 set Ass='$ename' where Ass='$Emp_ed'");
                header("Location:viewemployee.php?iskey=$key");
            }
            else
            {
                echo" <script language='JavaScript' type='text/javascript'>
                if (confirm('Error detected,check your internet...'))
                {
                self.location = 'updateemployee.php?ise='.$ename.'iskey='.$key.';
                } else {
                history.go(-1);
                }
                </script>";   
            }
        }
       
    }

    if(isset($_POST['csubmit'])) 
    {
        $cid=$_POST['country'];
        $cname=$_POST['client_name'];
        $cmail=$_POST['Client_email']; 
        
        $q=mysqli_query($conn,"UPDATE client set Client_type='$cid',Client_email='$cmail',Client_name='$cname' where Id='$Cid'");
        if($q)
        {
            header("Location:viewclient.php?iskey=$key");
        }
    }
    if(isset($_POST['psubmit']))
    {
        $cid=$_POST['country']; 
        $pname=$_POST['project_name'];
        $ptype=$_POST['project_type'];
        $sd=$_POST['start_date'];
        $ed=$_POST['end_date'];
        $q=mysqli_query($conn,"UPDATE project set Client_type='$cid',Project_name='$pname',Project_type='$ptype',Start_project='$sd',End_project='$ed' where Project_name='$Project_ed'");
        if($q)
        {
            $q=mysqli_query($conn,"UPDATE task1 set Project_name='$pname' where Project_name='$Project_ed'");
            header("Location:viewproject.php?iskey=$key");
        }
    }
    if(isset($_POST['tsubmit']))
    {
        $task=$_POST['Task'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $Ass=$_POST['Emp_name'];

        
        $y=mysqli_query($conn,"SELECT * FROM task1 where Task = '$task' AND Project_name = '$pname' ");
        $z=mysqli_fetch_array($y);
        
        $g=mysqli_query($conn,"SELECT * FROM task1 where Project_name = '$pname' AND Ass='$Ass' ");
        if(mysqli_num_rows($y) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This Task is already assigned for this project ...');"; 
            echo 'window.location.href = "addtask.php?iskey='.$key.'";';
            echo '</script>';
        }
        
        
        elseif(mysqli_num_rows($g) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('one task is already assigned to this employee for this project again if you want then click OK  ...');"; 
            echo '</script>';
            
            $q=mysqli_query($conn,"UPDATE task1 set Task='$task',Start_date='$start_date',End_date='$end_date',Ass='$Ass' where Id='$Emid'");
            if($q)
            {
                $q=mysqli_query($conn,"SELECT *From employee  where Emp_name='$Ass'");
                $x=mysqli_fetch_array($q);
                $q1=mysqli_query($conn,"SELECT *from task1 where Ass='$Ass'");
                $x1=mysqli_fetch_array($q1);
                $to=$x['Email'];
                $sub="Regarding Your Company";
                $msg= " Hii ".$x['Emp_name'].",\nyour task has been changed please see updated information.
                 \nProject name : ".$x1['Project_name']." \nTask : ".$x1['Task']." \nStart_date : ".$x1['Start_date']."\nEnd_date : ".$x1['End_date']."
                 \n\nComplete Your Task As Per Given Priority \nThanks & Regards";
                $headers="From:virenzalavadiya16@gmail.com.com";
                
                if(mail($to,$sub,$msg,$headers))
                {
                    header("Location:viewtask.php?iskey=$key");
                }   
                else
                {
                     header("Location:error.php");    
                }
            }
        }
        else
        { 
            $q=mysqli_query($conn,"UPDATE task1 set Task='$task',Start_date='$start_date',End_date='$end_date',Ass='$Ass' where Id='$Emid'");
            if($q)
            {
                $q=mysqli_query($conn,"SELECT *From employee  where Emp_name='$Ass'");
                $x=mysqli_fetch_array($q);
                $q1=mysqli_query($conn,"SELECT *from task1 where Ass='$Ass'");
                $x1=mysqli_fetch_array($q1);
                $to=$x['Email'];
                $sub="Regarding Your Company";
                $msg= " Hii ".$x['Emp_name'].",\nyour task has been changed please see updated information.
                 \nProject name : ".$x1['Project_name']." \nTask : ".$x1['Task']." \nStart_date : ".$x1['Start_date']."\nEnd_date : ".$x1['End_date']."
                 \n\nComplete Your Task As Per Given Priority \nThanks & Regards";
                $headers="From:virenzalavadiya16@gmail.com.com";
                
                if(mail($to,$sub,$msg,$headers))
                {
                    header("Location:viewtask.php?iskey=$key");
                }   
                else
                {
                     header("Location:error.php");    
                }
            }
        }

        
    }
    else{
        echo "<script>alert('Error detected,try again...!!!')</script>";
    }
?>