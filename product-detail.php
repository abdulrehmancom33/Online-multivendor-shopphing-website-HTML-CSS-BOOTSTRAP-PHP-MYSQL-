<html>
<body>

<table border='10'>
<tr>     
<th>id</th>
        <th>image</th>
        <th>title</th>
        <th>price</th>
        <th>description</th>
        <th>status</th>
        <th>Shop title</th>
        
      
    </tr>
<?php
session_start();
include("con1.php");
if(isset($_REQUEST['id']))
{
    

 $query= "SELECT * from pictures JOIN products ON products.id=pictures.product_id JOIN users ON users.id=products.user_id and products.id=".$_REQUEST['id'] ;
 $result1=mysqli_query($con1,$query);
if(!$result1)
{
  echo "no record";
}
else
{
while($row=mysqli_fetch_array($result1))
{

  $_SESSION['id']=$row['id'];
    ?> 
    <tr>
    <td> <?php  echo $row['id']; ?> </a></td>
    <td> <img src="<?php echo $row['picture_file_name'];?>"/></td>
  <td> <?php  echo $row['title']; ?> </a></td>

  <td><?php echo $row['price'];?></td>
  <td><?php echo $row['description'];?></td>
  <td><?php echo $row['status'];?></td>
  <td><?php echo $row['shop_title'];?></td>
  <td><a href="cart.php?id=<?=$row['id']?>">Add to cart </a></td>


 </tr>
  
  
<?php
}
}
}

?>
</table>
</body>
<html>