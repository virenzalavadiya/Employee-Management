<?php
  include 'connection.php';
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

  <title>Add Client</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
<script type="text/javascript">
function CheckCountry(val){
 var element=document.getElementById('interest1');
 if(val=='pick a country'||val=='outofcountry')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 
  
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
              <h3><i class="fas fa-users mr-3"></i></h3>
                <h3>CLIENTS</h3>
              </div>
            

          <!-- Topbar Navbar -->
          <?php include 'sidebar.php'?>
         
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <form action="client.php?iskey=<?php echo $key;?>" method="post">
        <div class="container" >
            <div class="row">
            <div class="col"></div>
                <div class="col-5">
                <div class="text-center">

                    <div class="form-group">

                        <label>Select  Client Type:</label><span style="color:red">*</span>  
                        <select class="form-control mb-3" onchange="CheckCountry(this.value);" name="interest1" >
                            <option >Pick a country</option>
                            <option value="India">India</option>
                            <option value="outofcountry">Out Of Country</option>                           
                        </select>   
                     
   
                        <!-- <label id="interest1" style="display:none" for="E-mail">Enter the Country Name:</label><span style="color:red">*</span>  -->
                        <input type="text" id="interest1" class="form-control mb-3" style="display:none" name="country" placeholder="Enter the Country Name" maxlength="30" required/>                       
         
                        <label for="client name">Enter Client name:</label><span style="color:red">*</span>
                        <input type="text" class="form-control mb-4"  name="client_name" placeholder="Enter client name" maxlength="30" required>

                        <label for="E-mail">Enter the e-mail:</label><span style="color:red">*</span>
                        <input type="email" class="form-control mb-3" value ="<?php echo $a;?>" name="Email" placeholder="Enter the e-mail" maxlength="30" required>
                      
                        <!-- <div class="float-right"> -->
                        <input type="submit" class="btn btn-primary" id="submit1" value="Add" name="submit">
                        </div>
                    </div>
                    </div>
                    <div class="col"></div>

                    </div> 

                  


        </form>
        
        <div class="col"></div>

         
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
          <a class="btn btn-primary" href="logout.php?iskey=<?php echo $key;?>">Logout</a>
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





