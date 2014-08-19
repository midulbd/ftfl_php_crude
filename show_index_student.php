

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>FTFL Dashboard</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">






</head>

<body>

<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">

                <span class="sr-only">FTFL</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#">FTFL</a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="nav navbar-nav">

                <li class="active"><a href="index.html" target="_blank">Home</a></li>

                <li><a href="students.php" target="_blank">Students</a></li>

                <li><a href="courses.php" target="_blank">Course</a></li>

                <li><a href="assigned.php" target="_blank">Assigned Studetns & Courses</a></li>

            </ul>

        </div>

    </div>

</nav>

<div class="container">

    <div class="jumbotron">

        <h3>Students registered with courses</h3>


    </div>

    <div class="row">



        <div class="col-md-6">

            <h2>Students</h2>

            <div class="row">
                <p>
                    <a href="student_enrollment.php" class="btn btn-default">To Enroll Go There</a>
                </p>


            </div>

            <table class="table table-striped">

                <thead>

                <tr>

                    <th>SL</th>

                    <th> Name</th>

                    <th>Course</th>

                    <th>Action</th>



                </tr>

                </thead>

            <tbody>

            <?php
                $con=mysqli_connect("localhost","root","","ftfl");
                // Check connection
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM assigned_courses");

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['student_name'] . "</td>";
                    echo "<td>" . $row['course_title'] . "</td>";
                    echo '<td width=250>';
                    echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                    echo ' ';
                    echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                    echo ' ';
                    echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                    echo '</td>';

                    echo "</tr>";
                }

                mysqli_close($con);
            ?>

            </tbody>

            </table>




        </div>




    </div>

    <hr>

    <div class="row">

        <div class="col-xs-12">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <footer>

                <p>&copy; Copyright 2013 Tutorial Republic</p>

            </footer>

        </div>

    </div>

</div>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>


