<?PHP   
echo $stu_name = $_POST['name'] ?? ' '  ;
echo  $stu_address = $_POST['address'] ?? ' ';
echo  $stu_class = $_POST['class'] ?? '' ;
echo  $stu_phone = $_POST['phone'] ?? '' ;

$conn = mysqli_connect("locaLhost","root","","CRUD") or die("Connection Failed !");
$sql = "INSERT INTO student(S_NAME,S_ADDRESS,S_CLASS,S_PHONE) VALUES('{$stu_name}' ,'{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");

header("location: http://localhost/CRUD_PROJECT/index.php");
 


mysqli_close($conn);
?>



 