<?php

include("con1.php");
?>
<html>
<head>



 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
<style>




</style>
</head>
<body>

<table border='1'>

<?php 
if(isset($_REQUEST['id']))
{
   $qry1="select * from products where category_id=".$_REQUEST['id'];
   $res=mysqli_query($con1,$qry1);
   ?>
   
   
   <?php

   while($row=mysqli_fetch_array($res))
   {
     ?>
     <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>description</th>
        <th>status</th>
        <th>date_added</th>
        
      
    </tr>
     <tr>
     <td> <?php echo $row['id']; ?></td>
    
     <td> <?php echo $row['title']; ?> </td>

     <td> <?php  echo $row['price'];  ?></td>
     <td> <?php  echo $row['description'];  ?></td>
     <td>  <?php echo $row['status']; ?></td>
      <td> <?php echo $row['date_added'];  ?></td>
      

      </tr>
    
<?php
   }
   exit();
}
?>
</table>


<nav class="navbar navbar-expand-sm bg-dark navbar-light">
  <ul class="navbar-nav">
    <li>
      <a class="nav-link" href="login.php" style="color:white"> admin Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php" style="color:white;float:right";>seller login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php" style="color:white;float:right";>Buyer login</a>
    </li>
  
  </ul>
</nav>



<div class="container-fluid">

<div class="row">


<div class='col-md-2'>
<img src="data:image/png;base64,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" style="width:180px;">
</div>
<div class="col-md-10">

<img src="top.jpg"  style="height:480px;width:1100px;margin-right:-30px;"/>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-3">
  <div class="card" style="margin-left:-220px; width:280px;margin-top:-481px;">
  <div class="card bg-success">
    <a href="create-new-customer.php" class="card-link" align="center"; style="color:white;width:100%">Customer Signup</a>
  </div>

</div>
</div>
</div>
</div>


     
<?php

$qry="select * from categories";
$result=mysqli_query($con1,$qry);

if(!$result)
{
  echo "result not found";
}
else{
         ?>
         
         <div class="card" style="width:250px;margin-top:-330px";>
 <div class="card-body">
         <div class="list-group">
         <?php
  while($row=mysqli_fetch_array($result))
  {
    ?>

    
    <a href="index.php?id=<?=$row['id']?>" class="list-group-item list-group-item-action list-group-item-secondary"><?php echo $row['name']; ?></a>
   

  <?php
  }
}   
 ?> 
 
</div>
</div>
</div>
<br>
<br>
<div>

 <?php

include("con1.php");
 $qry1= "SELECT * from pictures JOIN products ON products.id=pictures.product_id";
 $result1=mysqli_query($con1,$qry1);
if(!$result1)
{
  echo "no record";
}
else
{
while($row=mysqli_fetch_array($result1))
{
?>

<tr>
 
 <td><a href="product-detail.php?id=<?=$row['id']?>"><img src="<?php echo $row['picture_file_name'];?>"/></a></td>
 </tr>
 <tr>
<td><a href="product-detail.php?id=<?=$row['id']?>"> <?php  echo $row['title']; ?> </a></td>
</tr>
 <tr> <td><?php echo "<b>price:</b> RS.". $row['price'];?></td></tr>
  <tr><td><?php echo $row['description'];?></td>
  </tr>
<?php
}

}
?>

</div>


<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="card">
  <div class="card bg-primary">
    <a href="createshop.php" class="card-link" align="center"; style="color:white;width:100%">create Shop</a>
  </div>

</div>
</div>
</div>
</div>
</body>
</html>
