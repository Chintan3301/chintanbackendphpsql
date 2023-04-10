<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['insert_data'])) {
    $teacher_id = mysqli_real_escape_string($con, $_POST['teacher_id']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);


    $query = "INSERT INTO teacher (teacher_id, first_name, last_name, email, phone) VALUES ('$teacher_id','$first_name','$last_name','$email','$phone') ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: teacher.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: teacher.php");
    }
}

?>