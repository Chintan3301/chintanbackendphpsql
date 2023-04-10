<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['insert_data'])) {
    $enrollment_id = mysqli_real_escape_string($con, $_POST['enrollment_id']);
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $class_id = mysqli_real_escape_string($con, $_POST['class_id']);
    $date_enrolled = mysqli_real_escape_string($con, $_POST['date_enrolled']);

    $query = "INSERT INTO enrollment (enrollment_id, student_id, class_id, date_enrolled) VALUES ('$enrollment_id','$student_id','$class_id','$date_enrolled')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: enrolladd.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: enrolladd.php");
    }
}

?>