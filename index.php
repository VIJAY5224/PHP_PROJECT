<?php include 'header.php'; ?>
<div class="container">
    <h2>All Records</h2>

    <?php  
include 'Connfig.php';
$sql = "SELECT * FROM student JOIN studentclass  WHERE  student.S_CLASS = studentclass.C_ID" ;
$result = mysqli_query($conn , $sql ) or die("QUERY FAILED !");
if(mysqli_num_rows($result) > 0)
{    ?>
    <table>
        <tr>
            <th>ID</th><th>NAME</th><th>ADDRESS</th><th>CLASS</th><th>PHONE</th><th>ACTION</th>
            
        </tr><?php 
        while($row =mysqli_fetch_assoc($result)){  

            ?>
        <tr>
            <td><?php  echo $row['S_ID'] ?></td>
            <td><?php  echo $row['S_NAME'] ?></td>
            <td><?php  echo $row['S_ADDRESS']?></td>
            <td><?php  echo $row['C_NAME']?></td>
            <td><?php  echo $row['S_PHONE'] ?></td>
            <td><a href="edit.php?id=<?php  echo $row['S_ID'];?>" class="edit">EDIT</a>
            <a href="delete-inline.php?id=<?php  echo $row['S_ID'] ;?>" class="delete">DELETE</a></td>
        </tr>
        <?php }?>
    </table>

    <?php  mysqli_close($conn); }?>
</div>
</body>
</html>
