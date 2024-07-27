<?php 
include "header.php";
include "dbcon.php";
?>

    <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM students WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                echo ("Something wrong data not deleted". mysqli_error($conn));
            } else {
                header("location: index.php?delete_msg=Data deleted successfully");
            }
        } 
    ?>



<?php 
include "footer.php"
?>