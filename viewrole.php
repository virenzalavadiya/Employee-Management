<?php
    include "connection.php";
    include 'getkey.php';
    include 'adminactive.php';
    include 'admin_nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>View Role</title>

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

</style>

</head>

<body id="page-top">

    <!-- End of Sidebar -->
<!--.............................................main content...............................................-->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

       
          <!-- Topbar Search -->
              <div class="input-group-append">
              <h3><i class="fas fa-user-tag mr-3"></i></h3>
              <h3>VIEW ROLE</h3>
              </div>
            

          <!-- Topbar Navbar -->
          <?php include 'sidebar.php'?>


        </nav>
        

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div class="container-fluid">
        <div class="container">

       <!-- DataTales Example -->
       <div class="card shadow mb-4">
         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-bordered hover"  id="dataTable" width="100%" cellspacing="0">
             <?php
                           
                  $q1=mysqli_query($conn,"SELECT *from role");
                  $r=mysqli_num_rows($q1);
                          
                 ?>  

                  <thead align="center">
                    <tr>
                      <th>ROLE ID</th>
                      <th>ROLE NAME</th>
                      <th colspan="2" >ACTION</th>
                    </tr>
                  </thead>
      
                  <?php
                          for($i=1;$i<=$r;$i++)
                          {
                            $x=mysqli_fetch_array($q1);
                            $y=$x['Role_id'];
                                                           
                   ?>
                            <tr align="center">
                             <td><?php echo $x['Role_id'];?></td>
                             <td><?php echo $x['Role_name'];?></td>
                             <td>
                              <i class="fa fa-edit"></i><a href="updaterole.php?isr=<?php echo $y."&iskey=".$key;?>" id="a1">Edit</a>
                              </td>
                              <td>
                              <i class="fa fa-trash"></i><a href="delete.php?isr=<?php echo $y."&iskey=".$key;?>" id="a2" onclick='return checkdelete();'>delete</a>
                              </td>
                          <?php
                          }
                          ?>
        
                  </tr>
                  <tfoot align="center">
                    <tr>
                        <th>ROLE ID</th>
                        <th>ROLE NAME</th>
                        <th colspan="2" >ACTION</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
            </div>
         
        <!-- /.container-fluid -->

      

        

          <!-- Content Row--> 
          

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
            <span aria-hidden="true">??</span>
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
        </script>

</body>

</html>





