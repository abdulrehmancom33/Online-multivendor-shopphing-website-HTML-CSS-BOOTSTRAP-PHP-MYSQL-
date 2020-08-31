<html>
<body>
<table align="center" style="width:800px;margin-top:-200px" border='1' >
<?php
include("con1.php");
session_start();

   $qry1="select * from products where status=0;";
   $res=mysqli_query($con1,$qry1);
   ?>
   
   <h2> Category </h2>
   <?php

   while($row=mysqli_fetch_array($res))
   {
     ?>
    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['title']?></td>
    <td><?php echo $row['price']?></td>
    <td><?php echo $row['description']?></td>
    <td><?php echo $row['status']?></td>

    
    <td><a href="approve.php?id=<?=$row['id']?>">Approve </a></td>
    <td><a href="reject.php?id=<?=$row['id']?>">reject </a></td>
</tr>
<br>
    <?php

   }

?>
   </table>
   </body>
   </html>