<?php

    include "connection.php";
    session_start();
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];  
    $url_components = parse_url($url);
    
    parse_str($url_components['query'], $params);
    $key = $params['iskey'];
    $kid = $params['issm'];
    $Ass = $params['isAss'];
    $Cid=$params['cid'];
    $Emid= $params['emid'];

     $pass_sendmail=$_SESSION['Password'];
    // $key = urldecode($_GET['iskey']);
    // $key = str_replace(" ", "", $key);
    // $kid = urldecode($_GET['issm']);
    // $kid = str_replace(" ", "", $kid);
    // $Ass = urldecode($_GET['isAss']);
    // $Ass = str_replace(" ", "", $Ass);
    // $key=$_GET['iskey'];
    // $kid=$_GET['issm'];
    // $Ass=$_GET['isAss'];
    
    if($key)
    {
        $q=mysqli_query($conn,"SELECT * FROM employee where Key_id=$key");
        $x=mysqli_fetch_array($q);
        $emp=$x['Emp_name'];
        $img=$x['Image'];
    }
    $Role_ed = $params['isr'];
    $Emp_ed = $params['ise'];
    $Client_ed = $params['isc'];
    $Project_ed = $params['isp'];
    $Task_ed = $params['ist'];
    $a = $params['a'];
    $Taid=$params['taid'];
    

    
    // $Role_ed = urldecode($_GET['isr']);
    // $Role_ed = str_replace(" ", "", $Role_ed);
    // $Emp_ed = urldecode($_GET['ise']);
    // $Emp_ed = str_replace(" ", "", $Emp_ed);
    // $Client_ed = urldecode($_GET['isc']);
    // $Client_ed = str_replace(" ", "", $Client_ed);
    // $Project_ed = urldecode($_GET['isp']);
    // $Project_ed = str_replace(" ", "", $Project_ed);
    // $Task_ed = urldecode($_GET['ist']);
    // $Task_ed = str_replace(" ", "", $Task_ed);
   
    // $a = urldecode($_GET['a']);
    // $a = str_replace(" ", "", $a);
    
?>
