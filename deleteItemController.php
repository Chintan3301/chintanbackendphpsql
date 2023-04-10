<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "swiss_collection";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

    
$student_id=$_POST['record'];
$query="DELETE FROM students where student_id='$student_id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Product Item Deleted";
}
else{
    echo"Not able to delete";
}
    
?>