<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['update_stud_data'])) {
    $id = $_POST['student_id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $parent_id = $_POST['parent_id'];


    $query = "UPDATE students SET first_name='$first_name', last_name='$last_name', dob='$dob', phone='$phone', parent_id='$parent_id' WHERE student_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: stud.php");
    } else {
        $_SESSION['status'] = "Not Updated please enter correct student id";
        header("Location: stud.php");
    }
}

?>