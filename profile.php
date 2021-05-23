<?php
  include 'connection.php';
  include 'getkey.php';
  

  $q=mysqli_query($conn,"SELECT * from employee where Key_id=$key");
  $x=mysqli_fetch_array($q);
  if($x['Role_id']==1)
  {
    include 'admin_nav.php';
  }
  else
  {
    include 'employee_nav.php';
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
<script type="text/javascript">


</script>
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
                <h3><i class="fas fa-user mr-3"></i></h3>
                <h3>PROFILE</h3>
              </div>
            

          <!-- Topbar Navbar -->
          <?php include 'sidebar.php'?>

        </nav>
        <!-- End of Toph3bar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="container" >
            <form action="upload.php?iskey=<?php echo $key;?>"  method="post"  enctype="multipart/form-data">
              <div class="row">
                <div class="col"></div>
                <div class="col-4">
                  <div class="imgdisplay">
                    <img src="uploads/<?php echo $x['Image'];?>" alt="Image"  width="100%"></img>
                  </div>
                  <div class="float-right">
                    <div class="labl">
                      <label for="input_file"><h1>+<h1></label>
                    </div>
                    <input type="file"  name="fileToUpload"  id="input_file"></input>
                    <div class="form conntrol">
                      <input type="submit" class="btn btn-dark mt-2" value="Upload Image" name="submit">
                    </div>
                  </div>
            </form>
                </div> 
                <div class="col"></div>
              </div>
                  <div class="text-center text-capitalize  ">
                    <h2 ><b><?php echo $x['Emp_name']?></b></h2>
                    <div class="text-muted pb-4">
                      <h5><?php echo $x['Designation']?></h5>
                    </div>
                  
                    <label for="email">Email :</label>
                    <div class="pl-1 mb-1">
                      <?php echo $x['Email']?>
                   </div>
                   <label for="email">Phone :</label>
                    <div class="pl-1">
                      <?php echo $x['Ph_no']?>
                    </div> 
                  </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a class="btn btn-primary"  href="logout.php?iskey=<?php echo $key;?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
<!-- for tinymce editor -->

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>





