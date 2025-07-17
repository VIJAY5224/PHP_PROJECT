<?php include 'header.php'; ?>
<div class="container">
    <h2>Edit Record</h2>
    <?PHP 
    $conn = mysqli_connect("locaLhost","root","","CRUD") or die("Connection Failed !");

    $stu_id=$_GET['id'];
$sql = "SELECT * FROM student  WHERE  S_ID = {$stu_id}" ;
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");
if(mysqli_num_rows($result) > 0)
{  while($row=mysqli_fetch_assoc($result)) { ?>
    <form  class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>NAME<label>
        <input type="hidden"  name="id"value="<?php echo $row['S_ID']; ?>"><br>
        <input type="text"  name="name"value="<?php echo $row['S_NAME']; ?>"><br>

</div>
       <div class="form-group">
            <label>ADDRESS<label>
        <input type="text"  name="address"value="<?php echo $row['S_ADDRESS'];?>"><br>
</div>
        <div class="form-group">
            <label>CLASS<label>
<?PHP           $sql1="SELECT * FROM studentclass";
                $result = mysqli_query($conn , $sql1 ) or die("QUERY FAILED !");

               if(mysqli_num_rows($result) > 0)
                       {      echo '<select name="class"> '; 
                          
            while($row1=mysqli_fetch_assoc($result)) 
                       { 
                        if($row['S_CLASS'] == $row1['C_ID']){
                        $select="selected";

                        }else 
                        {
                        $select="";

                        }
                          echo "<option {$select} value='{$row1['C_ID']}'>{$row1['C_NAME']}</option>";
                       }
      echo "</select>";
}
?>     

</div>
        <div class="form-group">
            <label>PHONE<label>
        <input type="text"  name="phone"value="<?php echo $row['S_PHONE']; ?>"><br>
        
<input class="button" type="submit" value="UPDATE">
</div>
</form>
<?php }} ?> 
</div>
</body>
</html>
