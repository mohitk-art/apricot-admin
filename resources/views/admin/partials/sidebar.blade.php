<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      
      <a href="" class="logo-brand">
      <img src="{{ url('public/admin/uploads/logo/apricotlogo.png')}}" alt="User Image">
      </a>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="sd_dashboard">
        <a href="{{ url('admin/dashboard')}}" >
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