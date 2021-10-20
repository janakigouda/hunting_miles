<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Hunting Miles</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="../dash.php">
                    <i class="fa fa-tachometer text-center"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa fa-user-circle-o" aria-hidden="true"></i>
                        Employee
                    </a>
                    <ul class="collapse list-unstyled" id="employee">
                        <li>
                            <a href="../Employee/add_employee.php"><i class="fa fa-address-card" aria-hidden="true"></i>Add Employee</a>
                        </li>
                        <li>
                            <a href="../Employee/employee_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Employees-list</a>
                        </li>
                    </ul>
                </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-users"></i>
                    Customer
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="../customer/add_cust.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add Customer</a>
                    </li>
                    <li>
                        <a href="../customer/cust_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Customer-list</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#vehicle" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-list"></i>
                    Vehicle
                </a>
                <ul class="collapse list-unstyled" id="vehicle">
                   <li>
                        <a href="../vehicle/add_2_wheeler.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add-2-wheeler</a>
                    </li>
                    <li>
                        <a href="../vehicle/add_4_wheeler.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add-4-wheeler</a>
                    </li>
                    <li>
                        <a href="../vehicle/vehicle_list.php"><i class="fa fa-list" aria-hidden="true"></i>Vehicle-list</a>
                    </li>
                </ul>
            </li>
            <li>
                    <a href="../booked_v/booked_vehicle.php">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                        Booked-Vehicles
                    </a>
                </li>
            <li>
                <a href="../sold_v/sold_vehicle.php">
                    <i class="fa fa-outdent"></i>
                    Sold-Vechicles
                </a>
            </li>
            <!-- <li>
                <a href="../services/service.php">
                    <i class="fa fa-asl-interpreting"></i>
                    Services
                </a>
            </li> -->
            <li>
                <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-asl-interpreting"></i>
                    Services
                </a>
                <ul class="collapse list-unstyled" id="services">
                   <li>
                        <a href="../services/free.php"><i class="fa fa-heart" aria-hidden="true"></i>Free Services</a>
                    </li>
                    <li>
                        <a href="../services/paid.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Paid Services</a>
                    </li>
                    <li>
                        <a href="../services/warrenty.php"><i class="fa fa-star" aria-hidden="true"></i>Warrenty Services</a>
                    </li>
                </ul>
            </li>   
            <!-- <li>
                <a href="../spare_parts/spare.php">
                    <i class="fa fa-wrench" aria-hidden="true"></i></span>
                    Spare-Parts
                </a>
            </li> -->
            <li>
                <a href="#spare" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-wrench"></i>
                    Spare-Parts
                </a>
                <ul class="collapse list-unstyled" id="spare">
                   <li>
                        <a href="../spare/consumable.php"><i class="fa fa-cogs" aria-hidden="true"></i>Consumables</a>
                    </li>
                    <li>
                        <a href="../spare/run.php"><i class="fa fa-cog" aria-hidden="true"></i>Running</a>
                    </li>
                    <li>
                        <a href="../spare/wear.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Wear & Tear</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-flag"></i>
                    Reports
                </a>
                <ul class="collapse list-unstyled" id="report">
                    <li>
                        <a href="../services/service.php"><i class="fa fa-asl-interpreting" aria-hidden="true"></i>Service report</a>
                    </li>
                    <li>
                        <a href="../spare/spare.php"><i class="fa fa-wrench" aria-hidden="true"></i>Spare-Parts report</a>
                    </li>
                    <li>
                            <a href="../Employee/employee_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Employee report</a>
                    </li>
                    <li>
                        <a href="../customer/cust_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Customer report</a>
                    </li>
                    <li>
                        <a href="../vehicle/v_report.php"><i class="fa fa-list" aria-hidden="true"></i>Vehicle report</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <!-- <i class="fa fa-align-left"></i> -->
                    <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    <span>Sidebar</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="navbar-brand">
                    DASHBOARD
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="../../logout.php" id="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li> -->
                        <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" id="admin">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray small" id="admin1">
                  ADMIN
                </span>
                <img class="img-profile rounded-circle" src="../../images/pro2.png" width="30%">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../admin_profile.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../logout.php" id="logout">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                  Logout
                </a>
              </div>
            </li>
                    </ul>
                </div>
            </div>
        </nav>
        