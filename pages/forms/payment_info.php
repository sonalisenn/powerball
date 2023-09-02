<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../../common_pages/common.php'; ?>
  
  <style>
    div.dataTables_wrapper {
      text-align: left;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
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
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Payments</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Payments</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">


              <div class="card">
                <div class="card-header" >
                  <a href="monthly_payment.php"> <button class="btn btn-success" >New Payment</button></a>
                  <a href="payment_info.php"> <button class="btn btn-info">Payment Details</button></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Search</label>
                  <input type="text" class="form-control" placeholder="Search.." required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                 
                  <label> Filter by Month of payment</label>
                  <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                              </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Filter by payment</label>
                  <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Paid</option>
                                <option>Not paid</option>
                                <option>More than two months</option>
                    </select>

                </div>
              </div>
              
              
            </div>
                  <div class="table-responsive">
                    <table id="example" class="display nowrap" style="width:100%">
                      <thead>
                        <tr>

                          <th>Mem. Number</th>
                          <th>Name</th>
                          <th>Payable Date</th>
                          <th>Month</th>
                          <th>Amount</th>
                          <th>Status</th>



                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>27</td>
                          <td>
                            <button class="btn btn-success">Paid</button>
                            <button class="btn btn-warning">Not Paid</button>
                            <button class="btn btn-danger">Not Paid more than 2 months</button>
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
      <!-- /.content -->
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
    document.getElementById('b4').onclick = function() {
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
        "bFilter": false 

      });
    });
  </script>


</body>

</html>