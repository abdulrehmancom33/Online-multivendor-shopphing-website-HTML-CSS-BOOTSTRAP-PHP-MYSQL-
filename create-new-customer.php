
<html>
<body>

<?php
include("con1.php");
if(isset($_GET['submit']))
{
    $id=$_GET['id'];
    $uname=$_GET['uname'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $address=$_GET['address'];
    $type=$_GET['type'];


    $qry="INSERT INTO `users`(`id`, `name`, `email`, `password`, `address`,`type`) VALUES ('$id','$uname','$email','$password','$address','$type');";
$result=mysqli_query($con1,$qry);
header("location: index.php");
}

?>

<form action="create-new-customer.php" method="GET">

<table>

<tr>
<td>id</td>
<td><input type="text" name="id" /></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="uname" required/></td>
</tr>






<tr>
<td>email</td>
<td><input type="email" name="email" required/></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name="password" required/></td>
</tr>


<tr>
<td>address</td>
<td><input type="text" name="address" required/></td>
</tr>



<tr>
<td>Type</td>
<td><input type="text" name="address" required/></td>
</tr>



<td align="center";><input type="submit" name="submit" value="Signup"/></td>

</table>
</form>
</body>
</html>
