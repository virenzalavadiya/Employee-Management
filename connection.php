<?php
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL & ~E_NOTICE);

date_default_timezone_set('Asia/Kolkata');
date_default_timezone_get();
$servername="";
$username="root";
$password="";
$dbname="task";
$conn=mysqli_connect($servername,$username,$password,$dbname);

?>
<!-- $servername="sql305.epizy.com";
$username="epiz_27298677";
$password="6yqZjkYD7y5";
$dbname="task"; -->