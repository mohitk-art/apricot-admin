<!DOCTYPE html>
<html>
<head>
  <?php include 'top.php' ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
<?php include 'header.php' ?>
  <!-- =============================================== -->

<?php include 'sidebar.php' ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> View User </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/index"><i class="fa fa-home"></i> Dashboard </a></li>
        <li><a class="active"> View User </a></li>
        
      </ol>
    </section>

<?php if($this->session->flashdata('success_msg')){ ?>
  <div class="col-md-12">
    <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?= $this->session->flashdata('success_msg'); ?>
      </div>
    </div>
  </div>
<?php } ?>
<?php if($this->session->flashdata('error_msg')){ ?>
  <div class="col-md-12">
    <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?= $this->session->flashdata('error_msg'); ?>
      </div>
    </div>
  </div>
<?php } ?>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            
            <div class="box-header">
            <!--   <h3 class="box-title">View Find Job Data</h3> -->
            </div>

            <div class="box-body pad">



              <table id="user_data" class="table table-bordered table-striped ">
                <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Sr no.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i= 1; foreach($users as $user){ ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $user['name']; ?></td>
                      <td><?= $user['email']; ?></td>
                      <td><?= $user['phone']; ?></td>
                      <td><?= $user['status']; ?></td>
                      <td align="center">
                        <a class="btn btn-danger" href="<?= base_url() ?>admin/delete_user/<?= $user['id'] ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this client?');"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  <?php $i +=1; } ?>
                </tbody>
              </table>



            </div>

          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>





  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include 'footer.php' ?>
<script>
  $('#user_data').DataTable();
  $(document).ready(function(){
    $('.sd_user').addClass('menu-open');
  });
</script>
</body>
</html>
