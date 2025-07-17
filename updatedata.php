<?PHP   
 $stu_id = $_POST['id'] ?? ' '  ;
 $stu_name = $_POST['name'] ?? ' '  ;
 $stu_address = $_POST['address'] ?? ' ';
 $stu_class = $_POST['class'] ?? '' ;
 $stu_phone = $_POST['phone'] ?? '' ;

$conn = mysqli_connect("locaLhost","root","","CRUD") or die("Connection Failed !");
$sql = "UPDATE student SET S_NAME = '{$stu_name}' , S_ADDRESS = '{$stu_address}' , S_CLASS = '{$stu_class}' , S_PHONE= '{$stu_phone}' WHERE S_ID = {$stu_id}";
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");

header("location: http://localhost/CRUD_PROJECT/index.php");
 


mysqli_close($conn);
?>