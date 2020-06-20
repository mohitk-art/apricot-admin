<!DOCTYPE html>
<html>
<head>
  <?php include 'top.php' ?>
  <style type="text/css">
    .val_error p{
      color: #d60000;
      margin: 0;
      line-height: 1.2;
      position: absolute;
      font-size: 13px;
      letter-spacing: 0.5px;
    }
  </style>
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
      <h1>Settings</h1>
       <?php if($this->session->flashdata('update_settings')){ ?>
        <h5 class="alert alert-success">
          <?= $this->session->flashdata('update_settings'); ?>
        </h5>
      <?php } ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/index"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a class="active"> Settings </a></li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form action="<?= base_url()?>admin/settings" method="post"enctype="multipart/form-data">
          <div class="box box-info">

            <div class="box-header">
            <!--   <h3 class="box-title">Add  Job </h3> -->
            </div>

            <div class="box-body pad">

              <!-- ==================================== -->
              <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-file-image-o"></i>

              <h3 class="box-title">Update Logo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group col-md-12">
                  <div class="logo_dv1">
                    <img src="http://45.248.162.197/mobilecomm/uploads/att-logopng.png">
                  </div>
                  <label for="exampleInputFile">Update Logo</label>
                  <input class="brow-mainborsty" id="exampleInputFile" type="file" name="img">
                  <input class="form-control" value="<?= $rest->logo ?>"  type="text" readonly>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
              <!-- ================================== -->
               <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-link"></i>
              <input class="form-control" value="<?= $rest->logo ?>"  type="hidden" name="old_logo">
              <input class="form-control" value="<?= $rest->id ?>"  type="hidden" name="id" readonly>
              <h3 class="box-title">Social Links</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group col-md-6">
                 <label>Facebook Link</label>
                   <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <input class="form-control" value="<?= $rest->fblink ?>"  type="text" name="fblink">
                </div>
                <div class="val_error"><?php echo form_error('fblink'); ?></div>
                </div>

                <div class="form-group col-md-6">
                 <label>Twitter Link</label>
                   <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <input class="form-control" value="<?= $rest->twlink ?>" type="text" name="twlink">
                </div>
                <div class="val_error"><?php echo form_error('twlink'); ?></div>
                </div>

                <div class="form-group col-md-6">
                 <label>Linkedin Link</label>
                   <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-linkedin"></i>
                  </div>
                  <input class="form-control" value="<?= $rest->linkedinlink ?>" type="text" name="linkedinlink">
                </div>
                <div class="val_error"><?php echo form_error('linkedinlink'); ?></div>
                </div>

                <div class="form-group col-md-6">
                 <label>Pinterest Link</label>
                   <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pinterest"></i>
                  </div>
                  <input class="form-control" value="<?= $rest->pinterestlink ?>"  type="text" name="pinterestlink">
                </div>
                <div class="val_error"><?php echo form_error('pinterestlink'); ?></div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
              <!-- ================================== -->

              <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-address-card-o"></i>

              <h3 class="box-title">Update Footer Address</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
               
                <div class="form-group col-md-6">
                  <label>Telephone No</label>
                  <input type="text" class="form-control" value="<?= $rest->telephone ?>" placeholder="" name="telephone">
                  <div class="val_error"><?php echo form_error('telephone'); ?></div>
                </div>
                 <div class="form-group col-md-6">
                  <label>Fax</label>
                  <input type="text" class="form-control" value="<?= $rest->fax ?>" placeholder="" name="fax">
                  <div class="val_error"><?php echo form_error('fax'); ?></div>
                </div>
                 <div class="form-group col-md-6">
                  <label>Pincode</label>
                  <input type="text" class="form-control" value="<?= $rest->pincode ?>" placeholder="" name="pincode">
                  <div class="val_error"><?php echo form_error('pincode'); ?></div>
                </div>
                
                <div class="form-group col-md-12">
                  <label>Address</label>
                  <textarea class="form-control"  rows="10" cols="80" name="address"><?= $rest->address ?></textarea>
                  <div class="val_error"><?php echo form_error('address'); ?></div>
                </div>
              
            </div>
            <!-- /.box-body -->
          </div>
              <!-- ================================== -->

             
            </div>

            <div class="box-footer">
              <div class="col-md-12">
                 <input type="hidden" class="form-control" value="<?= $rest->id ?>" name="id">
                 <button type="submit" class="btn btn-primary">Update Settings</button>
              </div>
            </div>

          </div>
        </form>
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
  $(document).ready(function(){
    $('.sd_settings').addClass('menu-open');
    $('.sd_settings').find('.treeview-menu').show();
    $('.sd_settings').find('.sda_add').addClass('active');
  });
</script>
</body>
</html>
