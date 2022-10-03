<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LogIn | Absensi Pelajar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mt-5 text-center justify-content-center">
          <div class="col-sm-6">
            <h1 class="text-info" style="font-size:50px ;"> 
                 AbPel
            </h1>
            <h5>(Absensi Pelajar)</h5>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center mb-5">
          <!-- left column -->
          <div class="col-md-3 col-sm-3">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header mt-2">
                <h4 class=" text-center ">LOGIN <span class="">ABPEL</span></h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="controller/login.php" method="POST">
                <div class="card-body">
                  <div class="form-group row justify-content-center mt-4">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row justify-content-center">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <div class="offset-sm-2 col-sm-10">
                      <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Sign in</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark">
      Control sidebar content goes here 
  </aside> -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
