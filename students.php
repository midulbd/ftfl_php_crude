<?php


$name = $_POST['name'];

echo $name;


$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('ftfl',$connect);


$query = "insert into students1(course_title,code) values ('$title','$code')";


$result = mysql_query($query);
if($result)
{
    echo "Data inserted,thank you";
}
?>