<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['insert_data'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $parent_id = mysqli_real_escape_string($con, $_POST['parent_id']);


    $query = "INSERT INTO students (student_id, first_name, last_name, dob, email, phone, parent_id) VALUES ('$student_id','$first_name','$last_name','$dob','$email','$phone', '$parent_id') ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: stud.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: stud.php");
    }
}

?>