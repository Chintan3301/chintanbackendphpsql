<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php
                if (isset($_SESSION['status'])) {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong>
                        <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Confirm your id to edit data and endter data</h4>
                    </div>
                    <div class="card-body">

                        <form action="codeclassedit.php" method="POST">

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="">Teacher ID</label>
                                    <?php

                                    // Connect to database
                                    $con = mysqli_connect("localhost", "root", "", "school");



                                    // Get all the categories from category table
                                    $sql = "SELECT * FROM `class`";
                                    $all_categories = mysqli_query($con, $sql);

                                    // The following code checks if the submit button is clicked
                                    // and inserts the data in the database accordingly
                                    if (isset($_POST['submit'])) {
                                        // Store the Product name in a "name" variable
                                        $name = mysqli_real_escape_string($con, $_POST['first_name']);

                                        // Store the Category ID in a "id" variable
                                        $id = mysqli_real_escape_string($con, $_POST['class_id']);

                                        // Creating an insert query using SQL syntax and
                                        // storing it in a variable.
                                    }
                                    ?>
                                    <select name="class_id">
                                        <?php
                                        // use a while loop to fetch data
                                        // from the $all_categories variable
                                        // and individually display as an option
                                        while (
                                            $teacher_id = mysqli_fetch_array(
                                                $all_categories,
                                                MYSQLI_ASSOC
                                            )
                                        ):
                                            ;
                                            ?>
                                            <option value="<?php echo $teacher_id["class_id"];
                                            // The value we usually set is the primary key
                                            ?>">
                                                <?php echo $teacher_id["class_id"];
                                                // To show the category name to the user
                                                ?>
                                            </option>
                                            <?php
                                        endwhile;
                                        // While loop must be terminated
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Class Name</label>
                                <input type="text" name="class_name" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="">Teacher ID</label>
                                    <?php


                                    $con = mysqli_connect("localhost", "root", "", "school");




                                    $sql = "SELECT * FROM `teacher`";
                                    $all_categories = mysqli_query($con, $sql);
                                    if (isset($_POST['submit'])) {
                                        $name = mysqli_real_escape_string($con, $_POST['first_name']);


                                        $id = mysqli_real_escape_string($con, $_POST['teacher_id']);


                                    }
                                    ?>
                                    <select name="teacher_id">
                                        <?php

                                        while (
                                            $teacher_id = mysqli_fetch_array(
                                                $all_categories,
                                                MYSQLI_ASSOC
                                            )
                                        ):
                                            ;
                                            ?>
                                            <option value="<?php echo $teacher_id["teacher_id"];

                                            ?>">
                                                <?php echo $teacher_id["teacher_id"];

                                                ?>
                                            </option>
                                            <?php
                                        endwhile;

                                        ?>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update
                                    Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>