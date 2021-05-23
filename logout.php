<?php

  include "connection.php";
  include "getkey.php";
echo $key;
     $q=mysqli_query($conn,"UPDATE employee Set Activated=0 where Key_id='$key'");
     if($q)
     {
       header("Location:signin.php");
     } 

?>