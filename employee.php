<?php
 include 'connection.php';
 include 'getkey.php';

	if(isset($_POST['submit']))
    {
        function generateTicketID(){
            return substr(str_replace(' ','',microtime(FALSE)),2);
          }
          $hash=generateTicketID();
        
        session_start();
        $_SESSION['Password']=$_POST['Password'];
    	$emp=$_POST['Emp_name'];
        $pass=$_POST['Password']; 
        $email=$_POST['Email'];
        $ph=$_POST['Phone'];
        // $br=$_POST['Birth_Date'];
        $des=$_POST['Designation'];
    
        $y=mysqli_query($conn,"SELECT * FROM employee where Emp_name = '$emp' OR Email = '$email' ");
        $z=mysqli_fetch_array($y);
        $p=mysqli_query($conn,"SELECT * FROM employee where Ph_no = '$ph' ");

        if(mysqli_num_rows($y) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This employee name or Email id is already Exist...');"; 
            echo 'window.location.href = "addemployee.php?iskey='.$key.'";';
            echo '</script>';
        }
        elseif(mysqli_num_rows($p) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This phone no is already Exist...');"; 
            echo 'window.location.href = "addemployee.php?iskey='.$key.'";';
            echo '</script>';
        }
        else{  
            $pass=password_hash($pass,PASSWORD_DEFAULT);
            $q=mysqli_query($conn,"INSERT into employee(Key_id,Emp_name,Password,Email,Ph_no,Designation,Role_id,Activated,Created)values('$hash','$emp','$pass','$email','$ph','$des',2,0,CURRENT_TIMESTAMP())");
            
            if($q)
            {
                header("Location:sendmail.php?issm=".$hash."&iskey=".$key."");
            }
            else
            {
                echo" <script language='JavaScript' type='text/javascript'>
                if (confirm('Error detected,check your internet...'))
                {
                self.location = 'addemployee.php?iskey=$key';
                } else {
                history.go(-1);
                }
                </script>";   
            }
        }

    }
?>