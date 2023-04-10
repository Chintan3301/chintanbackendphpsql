<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Class Add</title>
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
                        <h4>Add Class Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="codeclassadd.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Class Id</label>
                                        <input type="number" name="class_id" class="form-control" required
                                            placeholder="Enter student id">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Class Name</label>
                                        <input type="text" name="class_name" class="form-control" required
                                            placeholder="Enter your Name">
                                    </div>
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