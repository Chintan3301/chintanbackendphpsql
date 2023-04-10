<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> school record </title>
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/68faa3a605.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    </link>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name" href="index.html">RISHTON SCHOOL</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.html" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="stud.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Student</span>
                </a>
            </li>
            <li>
                <a href="parent.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Parent</span>
                </a>
            </li>
            <li>
                <a href="teacher.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Teacher </span>
                </a>
            </li>
            <li>
                <a href="class.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Class</span>
                </a>
            </li>
            <li>
                <a href="enroll.php">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Enrollment Record</span>
                </a>
            </li>

    </div>

    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
        </div>

    </nav>

    <section class="home-section">
        <div>
            <h2>Teacher Record</h2>
            <table class="table ">
                <thead>

                    <tr>
                        <th class="text-center">Teacher Id.</th>
                        <th class="text-center">first Name</th>
                        <th class="text-center">last Name</th>

                        <th class="text-center">email</th>
                        <th class="text-center">phone</th>

                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <?php

                $server = "localhost";
                $user = "root";
                $password = "";
                $db = "school";

                $conn = mysqli_connect($server, $user, $password, $db);

                if (!$conn) {
                    die("Connection Failed:" . mysqli_connect_error());
                }

                $sql = "SELECT `teacher_id`, `first_name`, `last_name`, `email`, `phone` FROM `teacher`";
                $result = $conn->query($sql);
                $count = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <tr>

                            <td>
                                <?= $row["teacher_id"] ?>
                            </td>
                            <td>
                                <?= $row["first_name"] ?>
                            </td>
                            <td>
                                <?= $row["last_name"] ?>
                            </td>

                            <td>
                                <?= $row["email"] ?>
                            </td>
                            <td>
                                <?= $row["phone"] ?>
                            </td>

                            <td><a href="teacheredit.php" class="btn btn-primary" style="height:40px">Edit</a></td>

                            <td><a href="delteacher.php" class="btn btn-danger" style="height:40px">Delete</a></td>

                        </tr>
                        <?php
                        $count = $count + 1;
                    }
                }
                ?>
            </table>
        </div>

        <!-- Trigger the modal with a button -->
        <a href="addteacher.php">
            <button class="block"><b>Add Teacher</b></button>
        </a>

        <!-- Modal -->


        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>

</html>