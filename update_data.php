<?php 
include "header.php";
include "dbcon.php";
?>

        <?php 
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                
                $sql = "SELECT * FROM students WHERE id = '$id'";
            
                $result = mysqli_query($conn, $sql);
                if(!$result) {
                    die("Data not Found");
                } else {
                    $row = mysqli_fetch_assoc($result);
                   
                }
            
            }
        ?>
        <?php 
            if(isset($_POST["update_students"])){
                    if(isset($_GET['new_id'])){
                    $idnew = $_GET['new_id'];
                    }
                    $fname = $_POST['f_name'];
                    $lname = $_POST['l_name'];
                    $age = $_POST['age'];       
                    
                if(!empty($fname) || $fname != "" && !empty($lname) || $lname != "" && !empty($age) || $age != "" ){
                    $sql = "UPDATE students SET f_name = '$fname', l_name = '$lname', age = '$age' WHERE id = '$idnew'";
                    $result = mysqli_query($conn, $sql);
                    if(!$result) {
                        die("Data Not Updated". mysqli_error($conn) );
                    } else {
                        header("location: index.php?update_msg=Data updated successfully");
                       
                    }
                }
            } 
        ?>
    <form method="post" action="update_data.php?new_id=<?php echo $id;?>">
            <div class="form-group">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['f_name'];?>">
            </div>
            <br>
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form-control" value=<?php echo $row['l_name'];?>>
            </div>
            <br>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" value=<?php echo $row['age'];?>>
            </div>
            <br>
            <input type="submit" class="btn btn-success"  name="update_students" value="UPDATE">
    </form>



<?php 
include "footer.php"
?>