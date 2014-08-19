<!doctype html>
<html>

<head>
    <title>Course Entry Result</title>

</head>

<body>
<div>
    <?php


    $name = $_POST['name'];
    $email =  $_POST['email'];
    echo $name;
    echo $email;

    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('ftfl',$connect);


    $query = "insert into students(student_name,email) values ('$name','$email')";


    $result = mysql_query($query);
    if($result)
    {
        echo "New Student added";
    }
    ?>
</div>
</body>
</html>