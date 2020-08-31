
<html>
<body>


<a href="add_new.php" style="text-align:center;text-decoration:none;"> <h2 style="align:center">ADD new Products</h2></a>
<br>
<br>
<br>

<?php
session_start();
include ("con1.php");
?>
<table border="1">
    <tr>
        <th>image</th>
        <th>title</th>
        <th>price</th>
        
        <th>status</th>
        
      
    </tr>
    <?php
     $query= "SELECT * from products JOIN pictures ON products.id=pictures.product_id and products.user_id=".$_SESSION['uid'] ;

        $result = mysqli_query($con1,$query);

        if(!$result){
            echo "no record";
        }else{
            echo "record";
            while ($row=mysqli_fetch_array($result)){?>
                <tr>
                <td> <img src="<?php echo $row['picture_file_name'];?>"/></td>
                <td><?php echo $row['id']?></td>
                    <td><?php echo $row['title']?></td>
                    <td><?php echo $row['price']?></td>
                    
                    <td><?php echo $row['status']?></td>
                
                    <td><a href="delete.php?id=<?=$row['id']?>">Delete </a></td>
                    <td><a href="update.php?id=<?=$row['id']?>">Update </a></td>
                </tr>
                <?php
            }
        }
        ?>

</table>
</body>
</html>
