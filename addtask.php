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

  <title>Add Task</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 
    <!-- End of Sidebar --><!--.............................................main content...............................................-->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

       
          <!-- Topbar Search -->
              <div class="input-group-append">
              <h3><i class="fas fa-tasks mr-3"></i></h3>
                <h3>TASKS</h3>
              </div>
            

          <!-- Topbar Navbar -->
          <?php include 'sidebar.php'?>


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <form action="task.php?iskey=<?php echo $key;?>" method="post">
        <div class="container" >
            <div class="row">
            <div class="col"></div>
                <div class="col-5">
                <div class="text-center">

                    <div class="form-group">
                            <?php
                                $q=mysqli_query($conn,"SELECT distinct Project_name FROM project");
                                $r=mysqli_num_rows($q);
                            ?>

                        <label>Select Project Name:</label><span style="color:red">*</span>  
                        <select id="project" class="form-control mb-3" id="inlineFormCustomSelectPref" name="project" >
                              <option >---Select---</option>
                              <?php
                                for($i=1;$i<=$r;$i++)
                                {
                                    $x=mysqli_fetch_array($q);                           
                              ?>
                              <option value="<?php echo $x["Project_name"]?>"><?php echo $x["Project_name"]?></option>
                              <?php
                              }
                              ?>                          
                        </select> 
                        
                        <label for="Task">Enter the Task:</label><span style="color:red">*</span>
                        <input type="text" class="form-control mb-3" name="Task" placeholder="Enter the Task" maxlength="30" required>
                        
                        <?php
                          $q1=mysqli_query($conn,"SELECT *from employee where Role_id=2");
                          $r1=mysqli_num_rows($q1);
                        ?>
                        
                        <label for="start-date">Enter task start-date:</label><span style="color:red">*</span>
                        <input type="text" class="form-control mb-3" autocomplete="off" id="datepicker" name="start_date" placeholder="start date" required>
                        
                        <label for="end-date">Enter task end-date:</label><span style="color:red">*</span>
                        <input type="text" class="form-control mb-4" autocomplete="off" id="datepicker1" name="end_date" placeholder="end-date"  required>
                        
                   
                        <label>Project Assign To:</label><span style="color:red">*</span>
                        <select id="Assign" class="form-control mb-4" id="inlineFormCustomSelectPref" name="Emp_name" >
                              
                              <?php
                                if($Emp_ed)
                                {
                                  ?>
                                  <option value="<?php echo $Emp_ed?>"><?php echo $Emp_ed?></option>
                                <?php
                                }
                                else
                                {
                                  ?>
                                  <option value="---Select---">---SELECT---</option>
                                  <?php
                                  for($i=1;$i<=$r1;$i++)
                                  {
                                      $x1=mysqli_fetch_array($q1);
                                                           
                                  ?>
                                  <option value="<?php echo $x1["Emp_name"]?>"><?php echo $x1["Emp_name"]?></option>
                                  <?php
                                  }
                                }
                              ?>                          
                        </select> 
                        <!-- <div class="float-right"> -->
                        <input type="submit" class="btn btn-primary" value="Add" name="submit">
                        </div>

                    </div>
                  </div>
                  <div class="col"></div>
              </div> 
            </div>
        </form>         
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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      $(document).ready(function() {
    $( "#datepicker" ).datepicker(
        function(){
            // dateFormate:'dd-mm-yy',
            // changeMonth:true,
            // changeyear:true,
            // maxDate:'3M',
            // minDate:'-3M';
        }

    );
    });
    $(document).ready(function() {
    $( "#datepicker1" ).datepicker(
        function(){
            // dateFormate:'dd-mm-yy',
            // changeMonth:true,
            // changeyear:true,
            // maxDate:'3M',
            // minDate:'-3M';
        }

    );
    });
  </script>
</body>

</html>





