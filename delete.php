<?php 
include 'header.php';


if(isset($_POST['deletebtn']))
{
    include 'Connfig.php';
    $stu_id = $_POST['id'];


$sql = "DELETE FROM student WHERE S_ID = {$stu_id}";
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");

header("Location: http://localhost/CRUD_PROJECT/index.php");

mysqli_close($conn);
}
?>
<html><body>
<div id="main-content">
    <h2>Delete Record</H2>


<form class="post-form" action="<?php  $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" placeholder="Enter ID to  DELETE  your data " />
</div>
<input class="submit" type="submit" name="deletebtn" value="delete" />
</form>
</div>
</body>
</html>