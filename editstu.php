<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit stud</title>
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

                        <form action="stueditcode.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Student ID</label>
                                <input type="text" name="student_id" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">first Name</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No.</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">parent ID</label>
                                <input type="text" name="parent_id" class="form-control">
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