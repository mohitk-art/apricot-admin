<!DOCTYPE html>
<html>
<head>
  
  @include('admin.partials.top')
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
@include('admin.partials.header')
  <!-- =============================================== -->


@include('admin.partials.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Company  Management
      
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a class="active">Dashboard</a></li>
        
      </ol> -->
      
    </section>

    <!-- Main content -->
    <section class="content">
    @yield('content')
   

    </section>
        
       
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('admin.partials.footer')


</body>
</html>
