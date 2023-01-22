
<!DOCTYPE html>
<html>


     
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar ">
        <div class="container-fluid" style="background-color:blue;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.php" style="color: #fff;">MeroCare  Dashboard</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>                    <?php echo "man"; ?>

                <ul class = "dropdown-menu">
                    <li>
                        <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar ">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Dashboard</li>
                    <li>
                    </li>
                   
                            <li>
                               <a href="{{ url('/')}}/admin/news">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                                News Menu    </a>
                            </li>
                            <li>
                                <a href="all_hr_employees.php">
                                <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                                Appoinment Menu   </a>
                             </li>
                            <li>
                               <a href="job_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Hospitals Menu </a>
                            </li>
                            <li>
                               <a href="manager_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Doctors Menu   </a>
                            </li>
                            <li>
                               <a href="department_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Ohter  </a>
                            </li>

                    </li> 
                  
                  
                </ul><br><br><br>
             
                    <div class="alert alert-success">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                   

                 </div>
                 
              
            </div>

        </aside>
    </section>
    






