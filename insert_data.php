<?php
include "dbcon.php";
if(isset($_POST['add_students'])){

   $fname = $_POST['f_name'];
   $lname = $_POST['l_name'];
   $age = $_POST['age'];

   if(empty($fname) || empty($lname) || empty($age)){
     header('location:index.php?msg=Enter all the values please.');
   } else {
    $query = "INSERT INTO students (f_name,l_name, age) values ('$fname', '$lname', $age)";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed" . mysqli_error($conn));
    } else {
        header("location:index.php?insert_msg=Your data hase been added successfully");
    }
   }
}
?>