<?php include 'header.php'; ?><html>
<div class="container">
    <head><<link rel="stylesheet" href="style.css"></head>

<body>
    <h2>Add Record</h2>
    <form class="post-form" action ="savedata.php"  method ="post">
       <div class ="form-group" >
        <label>NAME</label>  <input type="text" name= "name" placeholder=" student Name" /><br></div>
        <div class ="form-group" >
        <label>ADDRESS </label>  <input type="text"  name ="address" placeholder=" student address" /><br></div>
        <div class ="form-group" >
        <label>CLASS</label>  
        <select name="class">
            <option value="" selected disabled >Select class </option>
            <?php 
$conn = mysqli_connect("locaLhost","root","","CRUD") or die("Connection Failed !");
$sql = "SELECT * FROM studentclass " ;
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");

while($row =mysqli_fetch_assoc($result)){


            ?>
            <option value="<?php   echo $row['C_ID'] ;  ?>"><?php   echo $row['C_NAME'] ;  ?></option> 
            
            <?php }?>
</select> 
</div>
<div class="form-group">
    <label>Phone</label>
    <input type="text"  name="phone" placeholder="enter number"/>
</div>
        <input class="submit" type="submit" value="Add">
    </form>
</div>
</body>
</html>
