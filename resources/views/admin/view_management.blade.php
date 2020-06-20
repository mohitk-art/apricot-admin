@extends('admin.layout.app')

@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Staff Augmentation </h1>
      <ol class="breadcrumb">
        <li><a href="admin/index"><i class="fa fa-home"></i> Dashboard </a></li>
        <li><a class="active"> About </a></li>
        <li><a class="active"> Staff Augmentation </a></li>
        <li><a class="active"> View Staff </a></li>
      </ol>
    </section>
         
    <!-- <div class="col-md-12">
        <div class="box-body">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            
        </div>
        </div>
    </div>
     
    <div class="col-md-12">
        <div class="box-body">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            
        </div>
        </div>
    </div> -->
          
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            
            <div class="box-header">
            <!--   <h3 class="box-title">View Find Job Data</h3> -->
            </div>

            <div class="box-body pad">



              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <!-- <th>Description Left</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Sr no.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <!-- <th>Description Left</th> -->
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                <tr>
                 <td>1</td>
                 <td>title</td>
                 <td>description']</td>
                 
                  <td>
                    <!-- <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    <a href="admin/section2_add" type="button" class="btn btn-success"><i class="fa fa fa-edit"></i></a> -->
                     <a class="btn btn-danger" href="admin/delete_staff/" title="Delete" onclick="return confirm('Are you sure you want to delete this client?');">
                     <i class="fa fa-trash-o"></i>
                    </a>
                     <a href="admin/edit_staff/" type="button" class="btn btn-success"><i class="fa fa fa-edit"></i></a>
                  </td>
                </tr>
              
              
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

<div class="control-sidebar-bg"></div>





<script>
  $(document).ready(function(){
    $('.sd_about').addClass('menu-open');
    $('.sd_about').find('.sda_014128').show();
    $('.sda_quality2').find('.treeview-menu').show();
    $('.sda_quality2').addClass('active');
    $('.sda_quality2').find('.view_staff2').addClass('active');
  });
</script>

@endsection