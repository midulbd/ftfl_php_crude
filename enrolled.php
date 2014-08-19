<!doctype html>
<html>

<head>
    <title>Course Entry Result</title>

</head>

<body>
<div>
    <?php


    $name = $_POST['name'];
    $course_title =  $_POST['course_title'];
    echo $name;
    echo $course_title;

    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('ftfl',$connect);


    $query = "insert into assigned_courses(student_name,course_title) values ('$name','$course_title')";


    $result = mysql_query($query);
    if($result)
    {
        echo " congrat!!! You are enrolled";
    }
    ?>
</div>
</body>
</html>