<?php
session_start();
include("con1.php");
if(isset($_POST['submit']))
{

$id=$_POST['id'];
$title=$_POST['title'];
$price=$_POST['price'];
$description=$_POST['description'];
$date_added=$_POST['date_added'];
$status=$_POST['status'];
$user_id=$_SESSION['uid'];
$category_id=$_POST['category_id'];
$ppid=$_POST['ppid'];
$img=$_FILES['img']['name'];
$tmpname=$_FILES['img']['tmp_name'];
$is_main=$_POST['is_main'];


move_uploaded_file($tmpname,"$img");

$qry="INSERT INTO products VALUES ('$id','$title','$price','$description','$date_added','$status','$user_id','$category_id')";

$result=mysqli_query($con1,$qry);
$pid=$con1->insert_id;
$qry1="INSERT INTO `pictures`(`id`, `product_id`, `picture_file_name`, `is_main_picture`) VALUES ('$ppid','$pid','$img','$is_main');";
$res=mysqli_query($con1,$qry1);
header("location: seller-dash.php");
}


?>

<html>
<body>

<form action="add_new.php" method="POST" enctype="multipart/form-data">
<table>
<tr>
<td>id</id>
<td><input type="text" name="id"/></td>
</tr>



<tr>
<td>title</id>
<td><input type="text" name="title" required/></td>
</tr>

<tr>
<td>price</id>
<td><input type="text" name="price"/></td>
</tr>

<tr>
<td>description</id>
<td><input type="text" name="description"/></td>
</tr>

<tr>
<td>date_added</id>
<td><input type="date" name="date_added"/></td>
</tr>

<tr>
<td>status</id>
<td><input type="text" name="status"/></td>
</tr>
<tr>




<tr>
<td>category_id</id>
<td><input type="text" name="category_id"/></td>
</tr>


<tr>
<td>pic id</id>
<td><input type="text" name="picid"/></td>
</tr>



<tr>
<td>product-image</id>
<td><input type="FILE" name="img"/></td>
</tr>


<tr>
<td>is_main</id>
<td><input type="text" name="is_main"/></td>
</tr>



<td><input type="submit" name="submit"/></td>



</table>
</form>
</body>
</html>