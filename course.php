<!doctype html>
<html>

<head>
    <title>Course Entry Result</title>

</head>

<body>
<div>
    <?php


    $title = $_POST['title'];
    $code =  $_POST['code'];
    echo $title;
    echo $code;

    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('ftfl',$connect);


    $query = "insert into courses(course_title,course_code) values ('$title','$code')";


    $result = mysql_query($query);
    if($result)
    {
        echo "New Course added";
    }
    ?>
</div>
</body>
</html>