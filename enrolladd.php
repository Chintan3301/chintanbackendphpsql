<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>enrollment</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

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

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Add Enrollment Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="codeenrolladd.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Enrollment Id</label>
                                        <input type="number" name="enrollment_id" class="form-control" required
                                            placeholder="Enter student id">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Student ID</label>
                                        <?php

                                        // Connect to database
                                        $con = mysqli_connect("localhost", "root", "", "school");



                                        // Get all the categories from category table
                                        $sql = "SELECT * FROM `students`";
                                        $all_categories = mysqli_query($con, $sql);

                                        // The following code checks if the submit button is clicked
                                        // and inserts the data in the database accordingly
                                        if (isset($_POST['submit'])) {
                                            // Store the Product name in a "name" variable
                                            $name = mysqli_real_escape_string($con, $_POST['first_name']);

                                            // Store the Category ID in a "id" variable
                                            $id = mysqli_real_escape_string($con, $_POST['student_id']);

                                            // Creating an insert query using SQL syntax and
                                            // storing it in a variable.
                                        }
                                        ?>
                                        <select name="student_id">
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
                                                <option value="<?php echo $teacher_id["student_id"];
                                                // The value we usually set is the primary key
                                                ?>">
                                                    <?php echo $teacher_id["student_id"];
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
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Class ID</label>
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
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">date of enrolled</label>
                                        <input type="date" name="date_enrolled" class="form-control" required
                                            placeholder="Enter your Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" name="insert_data" class="btn btn-primary">SAVE
                                            DATA</button>
                                    </div>
                                </div>
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