<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcone To Admin
                            <small>Author</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'add_Learners':
                                include "includes/add_Learners.php";
                                break;
                            
                            case 'update':
                                include "includes/update.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Learners_Id</th>
                                        <th>User_Name</th>
										<th>Name</th>
                                        <th>District</th>
										<th>App Driver License</th>
										<th>PSA/NSO</th>
                                       <th>Image</th>
                                        <th>Date</th>
									   <th>Status</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT *  FROM  posts order by post_id desc";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $Learners_id = $row['post_id'];
                                            $admin_name = $row['post_author'];
                                            $Learners_name = $row['post_title'];
											$ADL = $row['ADL'];
											$PSA_NSO = $row['PSA_NSO'];
											$image = $row['post_image'];
                                            $District = $row['District'];
                                            $City = $row['City'];
											$confirm = $row['confirm'];
											$date = $row['post_date'];
                                           
                                        
                                       

                                     ?>
                                    <tr>
                                        <td><?php echo $Learners_id  ?></td>
                                        <td><?php echo $admin_name ?></td>
                                        <td><?php echo $Learners_name ?></td>
                                        <td><?php echo $District ?></td>
										<td><?php echo $ADL ?></td>
										<td><?php echo $PSA_NSO ?></td>
									
                                       
                                        <td><img width="100" src="../images/<?php echo $image ?>"></td>
                                        <td><?php echo $date ?></td>
										 <td>
										 
										 	
									<?php 
										
										if($confirm == 'Complete'){
											echo"<span style='color:green'>$confirm</span>";
										}
										else{
											echo"<span style='color:red'>$confirm</span>";
										}
								     ?>
										 
										 
										 
										 
										 </td>
                                       <td> <?php echo "<td><a href='Learners.php?delete=$Learners_id'>Delete</a></td>"; ?></td>
                                       <td> <?php echo "<td><a href='Learners.php?source=update&Learners_id=$Learners_id'>Update</a></td>"; ?></td>
                                      <?php echo "<td><a href='Learners.php?Complete=$Learners_id'>Complete</a></td>"; ?>
                                      <?php echo "<td><a href='Learners.php?Not_Complete=$Learners_id'>Not_Complete</a></td>"; ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                </table><?php
                                break;
                        }
                        // if ($source = 'add_Learners') {
                        //        include "includes/add_Learners.php";   
                        // }
                        // elseif ($source = '') {
                        //     
                        // }   
                        ?>


                      

                        <?php 

                        if (isset($_GET['delete'])) {
                            
                            $Learners_idd = $_GET['delete'];
                            $query = "DELETE FROM posts WHERE post_id = {$Learners_idd} ";

                            $delete_Learners = mysqli_query($connection,$query);
                            if(!$delete_Learners) {
                                die("Query Failed" . mysqli_error($delete_Learners));
                            }
                            header("Location: Learners.php");
                        }

                        ?>
						
						
						 <?php 

                        if (isset($_GET['Not_Complete'])) {
                            $post_idd = $_GET['Not_Complete'];
                            $query = "UPDATE posts SET confirm = 'Not_Complete' WHERE post_id = '$post_idd'";
                            
                            $add_admin = mysqli_query($connection, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($connection));
                            }
                          header("Location: Learners.php");
                        }

                        ?>
						
						<?php 

                        if (isset($_GET['Complete'])) {
                            $post_idd = $_GET['Complete'];
                            $query = "UPDATE posts SET confirm = 'Complete' WHERE post_id = '$post_idd'";
                            
                            $add_admin = mysqli_query($connection, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($connection));
                            }
                           header("Location: Learners.php");
                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>


