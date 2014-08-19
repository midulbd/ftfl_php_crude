<?php 

$name = $_POST["name"];
$courses = $_POST["courses"];
echo $name.' '.$courses;




          $connect = mysql_connect('localhost','root','');
          $db = mysql_select_db('ftfl',$connect);


        $teacher_query = "insert into teacher(name) values ('$name')";
		$course_title="insert into courses(course_title) values ('$courses')";
        
		//var_dump($_POST); die();
        
$result_teacher = mysql_query($teacher_query );
$result_course=mysql_query($course_title);
if($result_teacher)
{
 echo "Data inserted,thank you";
}

if($result_course)
{
 echo "Data inserted,thank you";
}

?>
