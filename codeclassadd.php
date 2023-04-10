<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['insert_data'])) {
    $class_id = mysqli_real_escape_string($con, $_POST['class_id']);
    $class_name = mysqli_real_escape_string($con, $_POST['class_name']);
    $teacher_id = mysqli_real_escape_string($con, $_POST['teacher_id']);

    $query = "INSERT INTO class (class_id, class_name, teacher_id) VALUES ('$class_id','$class_name','$teacher_id')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: class.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: class.php");
    }
}

?>