<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['update_stud_data'])) {
    $enrollment_id = $_POST['enrollment_id'];
    $student_id = $_POST['student_id'];
    $class_id = $_POST['class_id'];
    $date_enrolled = $_POST['date_enrolled'];

    $query = "UPDATE enrollment SET student_id =' $student_id', class_id ='$class_id', date_enrolled ='$date_enrolled' WHERE enrollment_id ='$enrollment_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: enroll.php");
    } else {
        $_SESSION['status'] = "Not Updated, please add correct info...";
        header("Location: classedit.php");
    }
}
?>