<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../../common_pages/common.php'; ?>

</head>

<body class=" hold-transition sidebar-mini">
  <div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../../dist/img/powerball.png" alt="PowerballTrainingLogo" height="100" width="100">
    </div>
    <!-- top navigation -->
    <?php include '../../common_pages/topnavbar.php'; ?>

    <!-- Main Sidebar Container -->
    <?php include '../../common_pages/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                
                <h1>Attendance</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Payment Form</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Attendance</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Membership Number</label>
                  <input type="text" class="form-control" placeholder="Contact Number" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control"  required>
                </div>
              </div>

            </div>
            
            <div class="buttons_set">
              <div class="add_btn">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i>  Attend  </button>
                <button type="reset" class="btn btn-success"><i class="fa-solid fa-rotate-right"></i> Reset</button>
              </div>

            </div>
            
          </div>
         
        </div>
        <!-- /.card -->
      </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
             
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            
                            <th>Mem. Number</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                         

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            
                            <td>
                              <a href=""> <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                              <button class="btn btn-sm btn-danger ml-2 delete-button" data-id="1" id="b4"><i class="fas fa-trash"></i></button>
                             </td>
                          </tr>
                          
                    </tbody>
                </table>
              </div>
            </div>
           

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    </div>
    
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../../plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
 
  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->

<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>

document.getElementById('b4').onclick = function(){
	Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
};
</script>
<script>
  $(document).ready(function() {
      $('#example').DataTable({
          scrollX: true,
          scrollCollapse: true,
          paging: false,
          ordering: false,
        
      });
  });
</script>

</body>

</html>