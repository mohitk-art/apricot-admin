<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Survey</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link id="Link1" rel="shortcut icon" href="{{ url('admin') }}/assets/admin/img/favicon1.png" type="image/x-icon" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/plugin/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/plugin/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/plugin/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/css/skins/_all-skins.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/plugin/datatables2/css/dataTables.bootstrap.min.css">
 <link rel="stylesheet" href="{{ url('admin') }}/assets/admin/plugin/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
<?php //include 'header.php' ?>

<header class="main-header">
  <!-- Logo -->
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img class="user-image" alt="Admin" src="../uploads/admin-profile/t2.jpg">
              
                <!-- <img src="../assets/admin/img/user2-160x160.jpg" class="user-image" alt="User Image">
              
            
              <img src="../assets/admin/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
            
            <span class="hidden-xs">User Name</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              
                  <img class="img-circle" alt="User Image" src="uploads/admin-profile/">
                
                  <img src="{{ url('admin') }}/assets/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                
                <img src="{{ url('admin') }}/assets/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
             
              <p>
               
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="../admin/profile" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../admin/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>
  <!-- =============================================== -->

<?php //include 'sidebar.php' ?>

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      
      <a href="" class="pull-left image">
      <img src="uploads/" class="img-circle" alt="User Image">
      </a>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="sd_dashboard">
        <a href="index">
        <i class="fa fa-dashboard"></i> <span>DashBoard</span>
        </a>
      </li>
      <li class="sd_user">
        <a href="view_user">
        <i class="fa fa-user"></i> <span>User Registrations</span>
        </a>
      </li>        
      <li class="treeview sd_post_jobs">
        <a href="#">
        <i class="fa fa-briefcase"></i> <span>Company Management</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li class="sda_add"><a href="add_find_job"><i class="fa fa-circle-o"></i> Add Company</a></li>
          <li class="sda_view"><a href="view_find_job"><i class="fa fa-circle-o"></i> View Jobs</a></li>
          <li class="sda_view_apl_jbs"><a href="view_applied_jobs"><i class="fa fa-circle-o"></i> View Job Applicants </a></li>
        </ul>
      </li>
      
      <li class="treeview sdt_clients">
        <a href="#">
        <i class="fa fa-users"></i> <span>Payment Management</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li class="sda_add"><a href="add_topslider"><i class="fa fa-circle-o"></i> Add Slider</a></li>
          <li class="sda_view"><a href="view_topslider"><i class="fa fa-circle-o"></i> View Sliders</a></li>
        </ul>
      </li>
      
       
      <li class="treeview st_solution">
        <a href="#">
        <i class="fa fa-users"></i> <span>Subscription Management</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li class="st_solution_add"><a href="add_staffing"><i class="fa fa-circle-o"></i>Staffing  Add</a></li>
          <li class="st_solution_view"><a href="view_staffing"><i class="fa fa-circle-o"></i> Staffing View </a></li>
        </ul>
      </li>
        

       

      <li class="treeview sd_settings">
        <a href="#">
        <i class="fa fa-cogs"></i> <span>Settings</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li class="sda_add"><a href="settings"><i class="fa fa-circle-o"></i> Website Settings</a></li>
          <li class="sda_proflie"><a href="profile"><i class="fa fa-circle-o"></i> Profile Settings</a></li>
          <li class="sda_accnt_sett"><a href="account_settings"><i class="fa fa-circle-o"></i> Account Settings</a></li>
        </ul>
      </li>  
    </ul>
  </section>
</aside>


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Dashboard
      
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a class="active">Dashboard</a></li>
        
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
     
   <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>13</h3>

              <p>Total Post Company</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>10 User</h3>

              <p>Total Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> 10 clients</h3>

              <p>Total Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
           
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>1</h3>

              <p>Applied Survey</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
      </div>

    <!--    <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Daily Visitors</h3>

            </div>
            <div class="box-body">
              <div id="line-chart" style="height: 300px;"></div>
            </div>
          
          </div> -->

    </section>
  </div>
  <div class="control-sidebar-bg">
  
  </div>
</div>
<!-- ./wrapper -->
<?php //include 'footer.php' ?>

<footer class="main-footer">
   
   <strong>Copyright &copy; 2020 <a href="#">Survey </a>.</strong> All rights
   reserved.
</footer>



<script src="{{ url('admin') }}/assets/admin/plugin/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin') }}/assets/admin/plugin/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{ url('admin') }}/assets/admin/plugin/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ url('admin') }}/assets/admin/plugin/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin') }}/assets/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin') }}/assets/admin/js/demo.js"></script>
<!-- CK Editor -->
<script src="{{ url('admin') }}/assets/admin/plugin/ckeditor/ckeditor.js"></script>
<script>
 $(function () {
   CKEDITOR.replace('txt_editor1')
   CKEDITOR.replace('txt_editor2')
   CKEDITOR.replace('txt_editor3')
   CKEDITOR.replace('txt_editor4')
   $('.textarea').wysihtml5()
 })
</script>
<!-- DataTables -->
<script src="{{ url('admin') }}/assets/admin/plugin/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ url('admin') }}/assets/admin/plugin/datatables2/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
 $(function () {
   $('#example1').DataTable()
   $('#example2').DataTable({
     'paging'      : true,
     'lengthChange': false,
     'searching'   : false,
     'ordering'    : true,
     'info'        : true,
     'autoWidth'   : false
   })
 })
</script>

<!-- FLOT CHARTS -->
<script src="{{ url('admin') }}/assets/admin/plugin/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ url('admin') }}/assets/admin/plugin/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ url('admin') }}/assets/admin/plugin/Flot/jquery.flot.pie.js"></script>
<script src="{{ url('admin') }}/assets/admin/plugin/Flot/jquery.flot.categories.js"></script>

<!-- iCheck -->
<script src="{{ url('admin') }}/assets/admin/plugin/iCheck/icheck.min.js"></script>
<script>
 $(function () {
   $('input').iCheck({
     checkboxClass: 'icheckbox_square-blue',
     radioClass: 'iradio_square-blue',
     increaseArea: '20%' /* optional */
   });
 });
</script>
<!-- end footer -->
<script>
  $(document).ready(function(){
    $('.sd_dashboard').addClass('menu-open');
  });
</script>
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      { label: 'Series2', data: 30, color: '#3c8dbc' },
      { label: 'Series3', data: 20, color: '#0073b7' },
      { label: 'Series4', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>
