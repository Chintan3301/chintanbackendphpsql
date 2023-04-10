<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST['update_stud_data'])) {
    $teacher_id = $_POST['parent_id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $query = "UPDATE parent SET first_name='$first_name', last_name='$last_name', phone='$phone', email='$email' WHERE parent_id='$parent_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: parent.php");
    } else {
        $_SESSION['status'] = "Not Updated";
        header("Location: parent.php");
    }
}
?>