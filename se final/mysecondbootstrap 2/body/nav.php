  <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><i class="fa fa-fw fa-user"></i>Student Profile Admin</a>
                
                <!-- Searchbar -->
           <form class="navbar-form navbar-left" role="search" action="#" method="GET">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search_name" value="" >
        </div>
        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-search"></i></button>
      </form>
      <!-- Searchbar -->

            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                    <ul class="dropdown-menu message-dropdown">
    
   
      
     
                    </ul>
                </li>
    
                <li class="dropdown">
 
                <a href="auth/index.php"  ><i class="fa fa-user"></i><b >
                
                  Logout</b></a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                   
                     <ul>


  

                    <li >
                        <a href="department_list.php"><i class="fa fa-fw fa-table"></i> Department</a>
                    </li>

                    <li > 

                        <a href="course.php"><i class="fa fa-fw fa-table"></i> Course </a>
                    </li>





                    <li > 
                        <a href="section.php"><i class="fa fa-fw fa-table"></i> Section</a>
                    </li>

                    <li > 
                        <a href="subject_list.php"><i class="fa fa-fw fa-table"></i> Subject</a>
                    </li>

                    
                    <li >
                        <a href="index.php"><i class="fa fa-fw fa-table"></i> Student</a>

                    </li>
                    </ul>
                    </li>





                
            <!-- /.navbar-collapse -->
        </nav>