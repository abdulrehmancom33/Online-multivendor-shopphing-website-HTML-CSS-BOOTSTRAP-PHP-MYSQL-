
<html>
<body>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
</head>


<?php

 if(isset($_SESSION['uid']))
 {
   echo "<h1>you are already Login </h1>";
   exit();
 }
?>

<html>
<body style="background-color:gray">
<div class="card" style="width:400px;margin-left:500px">
<form action="login.php" method="POST">

<table align="center">

<tr>
<td>username</td>
<td><input type="text" name="uname" /></td>

 <tr>
 


<td>password</td>
<td><input type="password" name="password" required/></td>
<tr>

<td><input type="submit" name="submit" value="Log in"/></td>
</div>
</div>
</tr>
</table>
</form>
</card>
</body>
</html>

<?php 
include("con1.php");

if(isset($_POST['submit']))
{
  $uname=$_POST['uname'];
  $password=$_POST['password'];


  $qry="SELECT * FROM users WHERE `name`= '$uname'  AND  `password`='$password'";
         
   $result=mysqli_query($con1,$qry);

  if(mysqli_num_rows($result)==1)
  
  {
      $data=mysqli_fetch_array($result);
      session_start();
      $_SESSION["uid"]=$data['id'];
      if($data['type']=="admin")
      {
      header("location: admin-dash.php");
  }
  if($data['type']=="seller")
  {
  header("location: seller-dash.php");
}
if($data['type']!="seller" && $data['type']!="admin")
{
header("location: insert.php");
}
  else{

      echo "error";
      exit();
  }
}
}
?>
