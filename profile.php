<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

   

    <div class="container" style="width: 50%;">
                              
        <h2 style="margin-left: 40%;">Profile</h2>
        <?php $image = $_SESSION['s_image'] ; ?>
        <img src="admin/images/<?php echo $image;?>" width="200" style="margin-left: 32%;" class="img-circle" alt="Profile"> 
        <br><br><br><br>
        <div class="tab">
            <button class="tablinks" style="width: 50%" onclick="openCity(event, 'Personel Details')">Personal Details</button>
            
            <button class="tablinks" style="width: 50%"  onclick="openCity(event, 'Edit Details')">Edit Details</button>
        </div>


        <div id="Personel Details" class="tabcontent">
          <h3>Details</h3>
          <!-- <?php echo $_SESSION['s_id'];?> -->
          <br>
          <?php
          $curr_user_id = $_SESSION['s_id'];
          
          $query = "SELECT * FROM usersmarikina where user_id = $curr_user_id";

          $select_user = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($select_user)) {
            $username = $row['username'];
            $name = $row['name'];
            $user_lastname = $row['user_lastname'];
            $email = $row['email'];
            $user_phoneno = $row['user_phoneno'];
            ?>

            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $username; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo ucfirst($name); ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo ucfirst($user_lastname); ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $user_phoneno; ?></td>
                </tr>
              </tbody>
            </table>

          <?php } ?>
        </div>

        

        <div id="Edit Details" class="tabcontent">
          <h3>Edit Details</h3>
          <br>
          <?php
            //echo $_SESSION['s_id'];

            $curr_user_id = $_SESSION['s_id'];
            $query = "SELECT * FROM usersmarikina WHERE user_id = $curr_user_id ";
            $select_users = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_users)) {
                $username = $row['username'];
                $password = $row['password'];
                $name = $row['name'];
                $user_lastname = $row['user_lastname'];
                $password = $row['password'];
                $user_phoneno = $row['user_phoneno'];
                $email = $row['email'];
                $user_image = $row['user_image'];
            }

            if (isset($_POST['update-user'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $name = $_POST['name'];
              $user_lastname = $_POST['user_lastname'];
              $user_phoneno = $_POST['user_phoneno'];
              $email = $_POST['email'];


              $image = $_FILES['images']['name'];
              $tmp_image = $_FILES['images']['tmp_name'];

              move_uploaded_file($tmp_image, "admin/images/$image");

              $query = "UPDATE usersmarikina SET username='{$username}', password='{$password}', name='{$name}', user_lastname='{$user_lastname}', password='{$password}', user_phoneno={$user_phoneno}, email='{$email}', user_image='{$image}' WHERE user_id=$curr_user_id";
              
              //echo $title . " " . $admin;
              
              $update_bus = mysqli_query($connection,$query);

              if (!$update_bus) {
                die("Query Failed" . mysqli_error($connection));
              }
              $_SESSION['s_image'] = $image;
              header("Location:profile.php");
            }

            ?>

            <form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="username">Username</label>
                <input value="<?php echo $username; ?>" type="text" class="form-control" name="username">
              </div>

              <div class="form-group">
                <label for="firstname">Firstname</label>
                <input value="<?php echo $name; ?>" type="text" class="form-control" name="name">
              </div>

              <div class="form-group">
                <label for="lastname">Lastname</label>
                <input value="<?php echo $user_lastname; ?>" type="text" class="form-control" name="user_lastname">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $email; ?>" type="email" class="form-control" name="email">
              </div>

              <div class="form-group">
                <label for="phoneno">PhoneNo</label>
                <input value="<?php echo $user_phoneno; ?>" type="number" class="form-control" name="user_phoneno">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $password?>" id="myInput" type="password" class="form-control" name="password">
              </div>

              <div class="form-group">
                <input type="checkbox" onclick="myFunction()">Show Password
              </div>

              <div class="form-group">
                <img width="100" src="admin/images/<?php echo $user_image ?>">
              </div>

              <div class="form-group">
                <label>User Image</label>
                <input type="file" name="images" >
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update-user" value="Update">
              </div>
            </form>


        </div>

    </div>
        <hr>


    <script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>

<?php include "includes/footer.php"; ?> 