@extends('admin.layout.app')

@section('content')

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Profile</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <form class="form-horizontal" action="/admin/profile" method="post" enctype="multipart/form-data">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
                <!-- <img class="profile-user-img img-responsive img-circle" src="uploads/admin-profile/adminpic ?>" alt="User profile picture"> -->
              
                <img class="profile-user-img img-responsive img-circle" src="{{ url('public/admin/assets/img/t2.jpg')}}" alt="User profile picture">
              
              <h3 class="profile-username text-center"></h3>

             <!--  <p class="text-muted text-center">Software Engineer</p> -->
              <div class="form-group change-profilemain">
                <label for="exampleInputFile">Change Profile Img</label>
                <input id="exampleInputFile" type="file" name="img">
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <input id="exampleInputFile" type="hidden" name="old_img" value="">
      
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            
            <div class="tab-content">
            

              <div class="tab-pane active" id="settings">
                
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">Name</label>

                    <div class="col-sm-12">
                      <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" id="inputName" placeholder="Name" required=""> 
                      <div class="val_error"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-12 control-label" >Email</label>

                    <div class="col-sm-12">
                      <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" id="inputEmail" placeholder="Email" required="">
                      <div class="val_error"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">Old Password</label>

                    <div class="col-sm-12">
                      <input type="password" class="form-control" id="inputName" placeholder="Old Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">New Password</label>

                    <div class="col-sm-12">
                      <input type="password" class="form-control" id="inputName" placeholder="New Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-12 control-label">Re-Enter New Password</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputName" placeholder="Old Password">
                    </div>
                  </div>
                  
                
                 
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-danger" name="submit">Save</button>
                    </div>
                  </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </form>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->


 <script>
  $(document).ready(function(){
    $('.sd_settings').addClass('menu-open');
    $('.sd_settings').find('.treeview-menu').show();
    $('.sd_settings').find('.sda_proflie').addClass('active');
  });
</script>

@endsection
    
