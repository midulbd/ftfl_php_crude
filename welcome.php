<form role="form" method="post" action="student_enrollment.php>
    <div class="form-group">
<label for="name">Student Name:</label>
<select class="form-control" name="name[]">
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

<label for="name">Courses</label>
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
</form>