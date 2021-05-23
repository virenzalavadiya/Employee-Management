<?php
    include "connection.php";
    include "employeeactive.php";
    include 'getkey.php';
    include 'employee_nav.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>View Project</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <style>
#a1{color:green;}
#a2{color:#b32d00;}
#a3{color:blue;}

</style>

</head>

<body id="page-top">


    
<!--.............................................main content...............................................-->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

       
          <!-- Topbar Search -->
              <div class="input-group-append">
              <h3><i class="fas fa-tasks mr-3"></i></h3>
              <h3>VIEW PROJECT</h3>
              </div>
            

          <!-- Topbar Navbar -->
          <?php include 'sidebar.php'?>

        </nav>
        

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div class="container-fluid">
        <div class="container">

          <!-- Page Heading -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tables</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover "  id="dataTable" width="100%" cellspacing="0">
                <?php
                  // session_start();
                  // $emp=$_SESSION['Employee_name'];
                  $q=mysqli_query($conn,"SELECT distinct project.Project_name,project.Start_project,project.End_project
                  FROM  project
                  INNER JOIN task1 ON project.Project_name=task1.Project_name where task1.Ass='$emp'");
                  $r=mysqli_num_rows($q);
                          
                 ?>  

                  <thead align="center">
                    <tr>
                    <th>NO.</th>
                        <th>PROJECT_NAME</th>
                        <th>START_DATE</th>
                        <th>END_DATE</th>
                        <th>COMPLETION</th>
                    </tr>
                  </thead>
      
                  <?php
                          for($i=1;$i<=$r;$i++)
                          {
                            $x=mysqli_fetch_array($q);
                                                           
                   ?>
                            <tr align="center">
                             <td><?php echo $i;?></td>
                             <td><?php echo $x['Project_name'];?></td>
                             <td><?php echo $x['Start_project'];?></td>
                             <td><?php echo $x['End_project'];?></td>
                             <td><?php echo $emp;?></td>
                          <?php
                          }
                          ?>
                  </tr>
                  <tfoot align="center">
                    <tr>
                        <th>NO.</th>
                        <th>PROJECT_NAME</th>
                        <th>START_DATE</th>
                        <th>END_DATE</th>
                        <th>COMPLETION</th>
                       
                  </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                       
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      

        

          <!-- Content Row--> 
          
    
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabadmindashboard="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php?iskey=<?php echo $key;?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
            function checkdelete()
            {
                return confirm('are you sure to delete this data?');
            }
            function checksend()
            {
                return confirm('are you sure to send this task to user?');
            }
        </script>


</body>

</html>





