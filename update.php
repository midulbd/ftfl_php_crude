<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Update</h3>
        </div>

        <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
            <div class="control-group <?php echo !empty($id_error)?'error':'';?>">
                <label class="control-label">ID</label>
                <div class="controls">
                    <input name="id" type="number"  placeholder="ID" value="<?php echo !empty($id)?$id:'';?>">
                    <?php if (!empty($id_error)): ?>
                        <span class="help-inline"><?php echo $id_error;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($name_error)?'error':'';?>">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text" placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                    <?php if (!empty($name_error)): ?>
                        <span class="help-inline"><?php echo $name_error;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($course_error)?'error':'';?>">
                <label class="control-label">Course</label>
                <div class="controls">
                    <input name="course" type="text"  placeholder="Course" value="<?php echo !empty($course)?$course:'';?>">
                    <?php if (!empty($course_error)): ?>
                        <span class="help-inline"><?php echo $course_error;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" href="show_index_student.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>




<?php
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('ftfl',$connect);

$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: show_index_student.php");
}

if ( !empty($_POST)) {
    // keep track validation errors
    $id_error = null;
    $name_error = null;
    $course_error = null;

    // keep track post values
    $id = $_POST['name'];
    $name = $_POST['email'];
    $course = $_POST['mobile'];

    // validate input
    $valid = true;
    if (empty($id)) {
        $id_error = 'Please enter your Id';
        $valid = false;
    }

    if (empty($name)) {
        $name_error = 'Please enter Name';
        $valid = false;
    }


    if (empty($course)) {
        $course_error = 'Please enter Course';
        $valid = false;
    }

    // update data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE assigned_courses  set id = ?, student_name = ?, course_title =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id,$name,$course,$id));
        Database::disconnect();
        header("Location: show_index_student.php");
    }
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM assigned_courses where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $name = $data['id'];
    $email = $data['name'];
    $mobile = $data['course'];
    Database::disconnect();
}
?>
