<?php

    include 'connection.php';
    include 'getkey.php';
    if(isset($_POST['submit']))
    {
        $rid=$_POST['role_id'];
        $rname=$_POST['role_name'];
        $y=mysqli_query($conn,"SELECT * FROM role where Role_id = '$rid' or Role_name = '$rname' ");
        $z=mysqli_fetch_array($y);
        
        if(mysqli_num_rows($y) > 0)
        {
            echo '<script type="text/javascript">'; 
            echo "alert('This id and role name is already Exist...');"; 
            echo 'window.location.href = "addrole.php?iskey='.$key.'";';
            echo '</script>';
        }
        else{
            $q=mysqli_query($conn,"INSERT INTO role(Role_id,Role_name,Created)values($rid,'$rname',CURRENT_TIMESTAMP())");    
            if($q)
            {
                header("Location:viewrole.php?iskey=$key");
            }
        }
    }