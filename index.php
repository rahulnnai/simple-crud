<?php 
include "header.php";
include "dbcon.php";
?>
<?php 
        if(isset($_GET['msg'])){
            echo "<h6>" . $_GET['msg'] . "</h6>"; 
        }
?>
<?php 
        if(isset($_GET['insert_msg'])){
            echo "<h6 style='color: green;'>" . $_GET['insert_msg'] . "</h6>"; 
        }
?>
<?php 
        if(isset($_GET['update_msg'])){
            echo "<h6 style='color: green;'>" . $_GET['update_msg'] . "</h6>"; 
        }
?>
<?php 
        if(isset($_GET['delete_msg'])){
            echo "<h6 style='color: green;'>" . $_GET['delete_msg'] . "</h6>"; 
        }
?>

    <div class="box1">
    <h2 class="fw-semibold">ALL STUDENTS</h2>
    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Age</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM students";
            $result_fetch = mysqli_query($conn,$query);

            if(!$result_fetch){
                die("Query Failed");
            } else {
                while($row = mysqli_fetch_assoc($result_fetch)) {
                ?>
                    <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['f_name']?></td>
                    <td><?php echo $row['l_name']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><a href="update_data.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete_data.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>

<!-- Modal -->
<form action="insert_data.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
            <div class="form-group">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<?php include "footer.php"?>