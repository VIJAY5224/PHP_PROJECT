<?php  

echo $stu_id = $_GET['id']; 

include 'Connfig.php';
$sql = "DELETE FROM student WHERE S_ID = {$stu_id}";
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");

header("Location: http://localhost/CRUD_PROJECT/index.php");

mysqli_close($conn);
?>

