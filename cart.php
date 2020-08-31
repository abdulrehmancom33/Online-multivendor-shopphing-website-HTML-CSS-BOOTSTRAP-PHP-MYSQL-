<html>
<body>
<table border='1'>

<?php
global $count;
include("con1.php");
session_start();

if(isset($_REQUEST['id']))
{
    
 $qry1= "SELECT * from pictures join products on pictures.product_id=products.id and products.id=".$_REQUEST['id'];
 
 $result1=mysqli_query($con1,$qry1);
if(!$result1)
{
  echo "no record";
}
else
{
while($row=mysqli_fetch_array($result1))
{
  
    
    $_SESSION["id"]=$row['id'];
    $_SESSION["title"]=$row['title'];
    $_SESSION["price"]=$row['price'];
    $_SESSION["date_added"]=$row['date_added'];
    $_SESSION["description"]=$row['description'];
    $_SESSION['img']= $row['picture_file_name'];
  
 
}
}
}

if(isset($_GET['id']))
{
  ?>
<tr>
 <td> <?php echo $_SESSION['cart_'.$_REQUEST['id']]+='1' ;?></td>
 <td> <img src="<?php echo $_SESSION['img'];?>"/></td>
   <td><?php echo $_SESSION["price"]; ?> </td>
   <td><?php echo $_SESSION["description"]; ?> </td>
   <td><?php echo $_SESSION["date_added"]; ?> </td>
 
 <?php
}
?>

  


