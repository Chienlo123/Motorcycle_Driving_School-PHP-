<?php include"db.php" ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #182c39;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="reportpila.php"><p style="color:white"> Motorcycle <span style="color:red"> DRIVING </span>School</p></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

					
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php 
                    if(isset($_SESSION['s_username'])) {
                        if ($_SESSION['s_role']=='Admin') {
                            ?>
                            <li>
                                <a href="admin/reportpila.php"><i class="fa fa-fw fa-child"></i>Admin</a>
                            </li>
                  
                    <?php } } ?>
					
					<?php 
                    if(isset($_SESSION['s_username'])) {
                        if ($_SESSION['s_role']=='Learners') {
                            ?>
                            <li>
                                <a href="Learners/indexpila.php"><i class="fa fa-fw fa-child"></i>Add Learners</a>
                            </li>
                  
                    <?php } } ?>
					
					
					<li>
                        <a href="indexpila.php">Home</a>
                    </li>
					
					  <li>
                        <a href="aboutUspila.php">About</a>
                    </li>
                    <li>
                        <a href="servicespila.php">Services</a>
                    </li>
					
					
					 <li>
                        <a href="contactpila.php">Contact</a>
                    </li> 

                   	<li>
                        <a href="chatpila/index.php">Chat Box</a>
                    </li> 
					
					

                   
					
				
				
				 <?php 
                    if(!isset($_SESSION['s_username'])) {
                        
                            ?>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

                                if(isset($_SESSION['s_username']))
                                echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
								<li>
                                         <a href="index.php"><i class="fa fa-fw fa-user"></i> Admin Muntinlupa</a>
                                    </li>
									 <li class="divider"></li>
                                    <li>
                                        <a href="indexlaspinas.php"><i class="fa fa-fw fa-user"></i> Admin Laspinas</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                         <a href="indexnovaliches.php"><i class="fa fa-fw fa-user"></i> Admin Novaliches</a>
                                    </li>
									 <li class="divider"></li>
									<li>
                                         <a href="indexpila.php"><i class="fa fa-fw fa-user"></i> Admin Pila</a>
                                    </li>
									
									
                                </ul>
                            </li>
					

                    <?php  } ?>
					
						 <?php 
                    if(!isset($_SESSION['s_username'])) {
                        
                            ?>
                          <li>
                                <a href="indexadmin.php"><i class="fa fa-fw fa-child"></i>Admin</a>
                            </li>
					

                    <?php  } ?>

                    <?php 
                        if (isset($_SESSION['s_username'])) {
                            # code...
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

                                if(isset($_SESSION['s_username']))
                                echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profilepila.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            
                    <?php    }
                    ?>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
