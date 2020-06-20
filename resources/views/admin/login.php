<!DOCTYPE html>
<html>
<head>
 <?php include 'top.php' ?>
 <style type="text/css">
   .error_message{
    color: red;
   }
 </style>
</head>
<body class="hold-transition login-page">
  <div class="login-main">
    <div class="login-mainbg">
<div class="login-box">
  <div class="login-logo">
    <a href="#">
      <?php $logo = $this->db->where('id',1)->select('logo')->get('settings')->row_array(); ?>
      <img class="logo-mainsty" src="<?php echo base_url();?>uploads/<?= $logo['logo']; ?>" alt="" />
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">Login</p>
<center><p><?php echo ($error!="" ? "<span class='error_message'>".$error."</span>" : "" ); ?></p></center>
<?php if($this->session->flashdata('error_msg')){ ?>
  <div class="col-md-12">
    <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p class="alert alert-danger"><?= $this->session->flashdata('error_msg'); ?></p>
      </div>
    </div>
  </div>
<?php } ?>
    <form class="form-horizontal form-material" id="loginform" action="<?php echo base_url();?>admin/index" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group">
          <div class="col-xs-12">
              <!-- <label class="radio-inline">
                <input type="hidden" name="role" value="admin" checked="">Admin
              </label> -->
              <input type="hidden" name="role" value="admin" checked="">
          </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="clearfix"></div>
</div>
</div>
<div style="display: none;">
<?php include 'footer.php' ?>
</div>
</body>
</html>
