<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset ('dist/img/midsouth.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <span class=""><b>Administrator</b></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
       

        <!-- Optionally, you can add icons to the links -->
        <li {{{(Request::is('dashboard') ? 'class=active': '' )}}}><a href="{{url('dashboard')}}"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

        <li class="header">MAINTENANCE</li>

             <!--Customer-->
            <li {{{ (Request::is('customer') ? 'class = active': '')}}} ><a href="{{url('customer')}}"><i class="fa fa-user-alt"></i> Customer</a></li>

            <!--Technician-->
            <li {{{ (Request::is('technician') ? 'class = active': '')}}}><a href="{{url('technician')}}"><i class="fa fa-user-alt"></i> Technician</a></li>

            <!--Vehicles-->
            <li class="treeview">
              <a href="#"><i class="fa fa-car-alt"></i> <span>Vehicles</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">

                  <!--Models-->
                 <li {{{ (Request::is('model') ? 'class=active': '')}}}><a href="{{url('model')}}"><i class="fa fa-car-alt"></i> Models</a></li>

                 <!--Inspection-->
                 <li {{{ (Request::is('inspection') ? 'class=active': '')}}}><a href="{{url('inspection')}}"><i class="fa fa-car-alt"></i> Inspection</a></li>

              </ul>
            </li>

              <!--Services-->
            <li class="treeview">
              <a href="#"><i class="fa fa-car-alt"></i> <span>Services</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">

                <!--Categories-->
                 <li {{{ (Request::is('category') ? 'class=active': '')}}}><a href="{{url('category')}}"><i class="fa fa-car-alt"></i> Categories</a></li>

                 <!--List-->
                 <li {{{ (Request::is('service') ? 'class=active': '')}}} ><a href="{{url('service')}}"><i class="fa fa-car-alt"></i> List</a></li>

              </ul>
            </li>
        
        <!--Transaction-->
        <li class="header">TRANSACTION</li>
        
            <li class="treeview">
              <a href="#"><i class="fa fa-stethoscope"></i> <span>Inspection</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                 <li {{{ (Request::is('checkup') ? 'class=active': '')}}} ><a href="{{url('checkup')}}"><i class="fa fa-stethoscope"></i> Check-up </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-briefcase"></i> <span>Job-Order</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                 <li {{{ (Request::is('schedule') ? 'class=active': '')}}} ><a href="{{url('schedule')}}"><i class="fa fa-calendar-alt"></i> Schedule </a></li>
              </ul>
            </li>

        <li class="header">REPORT</li>

          <li class="treeview">
              <a href="#"><i class="fa fa-book"></i> <span>Reports</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                 <li {{{ (Request::is('joreport') ? 'class=active': '')}}} ><a href="{{url('joreport')}}"><i class="fa fa-briefcase"></i> Job Order Report </a></li>
                 <li {{{ (Request::is('prodreport') ? 'class=active': '')}}} ><a href="{{url('prodreport')}}"><i class="fa fa-book"></i> Productivity Report </a></li>
                 <li {{{ (Request::is('appointreport') ? 'class=active': '')}}} ><a href="{{url('appointreport')}}"><i class="fa fa-calendar-alt"></i> Appointment Report </a></li>
              </ul>
            </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>