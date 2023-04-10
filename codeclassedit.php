<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['update_stud_data'])) {
    $class_id = $_POST['class_id'];

    $class_name = $_POST['class_name'];
    $teacher_id = $_POST['teacher_id'];

    $query = "UPDATE class SET class_name =' $class_name', teacher_id ='$teacher_id' WHERE class_id ='$class_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: class.php");
    } else {
        $_SESSION['status'] = "Not Updated";
        header("Location: classedit.php");
    }
}
?>