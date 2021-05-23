<?php

    include 'connection.php';
    include 'getkey.php';
    if(isset($_POST['submit']))
    {
        $pname=$_POST['project'];
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
            echo "alert('one task is already assigned to this employee for this project if you want to give more then click OK  ...');"; 
            echo '</script>';
            $q=mysqli_query($conn,"INSERT INTO task1(Project_name,Task,Start_date,End_date,Ass)values('$pname','$task','$start_date','$end_date','$Ass')");
            if($q)
            {
            header("Location:sendtask.php?isAss=".$Ass."&iskey=".$key."");
            }
        }
        else
        { 
            $q=mysqli_query($conn,"INSERT INTO task1(Project_name,Task,Start_date,End_date,Ass)values('$pname','$task','$start_date','$end_date','$Ass')");
            if($q)
            {
            header("Location:sendtask.php?isAss=".$Ass."&iskey=".$key."");
            }
        }
    }

   