

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>FTFL Student</title>

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

        <h3>Gorzon Solutions PVT LT></h3>


    </div>


    <div class="row">

        <div class="col-xs-12">
            <br>
            <br>
            <br>
            <br>


        </div>
    </div>

    <div class="row">

        <div class="col-md-6">


            <div class="bs-example">
                <form class="form-horizontal"  action="enrolled.php" method="post">


                    <div class="form-group">
                        <h3>Complete your registration</h3>

                    </div>

                    <div class="form-group">
                        <label for="name" class="control-label col-xs-4">Student Name:</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="name">
                                <?php
                                $connect = mysql_connect('localhost','root','');
                                $db = mysql_select_db('ftfl',$connect);
                                $result = mysql_query("select student_name from students");
                                while($row = mysql_fetch_array($result))
                                {
                                    echo "<option>".$row['student_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input_email" class="control-label col-xs-4">Course:</label>
                        <div class="col-xs-8">
                            <select multiple class="form-control" name="course_title">
                                <?php
                                $connect = mysql_connect('localhost','root','');
                                $db = mysql_select_db('ftfl',$connect);
                                $result = mysql_query("select course_title from courses");
                                while($row = mysql_fetch_array($result))
                                {
                                    echo "<option>".$row['course_title']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

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

                        <p>&copy; Copyright 2013 Ashiqul Islam</p>

                    </footer>

                </div>

            </div>

        </div>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>

