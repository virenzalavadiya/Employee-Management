<?php
include 'adminactive.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admindashboard.php?iskey=<?php echo $key;?>">
       
        <div class="sidebar-brand-text mx-3">Dashbord <br><h6>Admin</h6></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="admindashboard.php?iskey=<?php echo $key;?>">
          
          <span>Dashboard</span></a>
      </li>  -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-cog"></i> -->
          <i class="fas fa-user-tag"></i>
          <span>ROLE</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Role:</h6>
            <a class="collapse-item" href="addrole.php?iskey=<?php echo $key;?>">Add role</a>
            <a class="collapse-item" href="viewrole.php?iskey=<?php echo $key;?>">View role</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-user"></i>
          <span>EMPLOYEE</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Employee:</h6>
            <a class="collapse-item" href="addemployee.php?iskey=<?php echo $key;?>">Add employee</a>
            <a class="collapse-item" href="viewemployee.php?iskey=<?php echo $key;?>">View employee</a>
          </div>
        </div>
      </li>
    

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-users"></i>
          <span>CLIENT</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Clients:</h6>
            <a class="collapse-item" href="addclient.php?iskey=<?php echo $key;?>">Add Client</a>
            <a class="collapse-item" href="viewclient.php?iskey=<?php echo $key;?>">View Client</a>
            </div>
        </div>
        </li>

            <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-flag"></i>
          <span>PROJECT</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Projects:</h6>
            <a class="collapse-item" href="addproject.php?iskey=<?php echo $key;?>">Create Project</a>
            <a class="collapse-item" href="viewproject.php?iskey=<?php echo $key;?>">View Project</a>
           </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePag" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-tasks"></i>
          <span>TASK</span>
        </a>
        <div id="collapsePag" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Task:</h6>
            <a class="collapse-item" href="addtask.php?iskey=<?php echo $key;?>">Create task</a>
            <a class="collapse-item" href="viewtask.php?iskey=<?php echo $key;?>">View task</a>
           </div>
        </div>
      </li>

    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    
    <!-- End of Sidebar -->
    </body>
    </html>