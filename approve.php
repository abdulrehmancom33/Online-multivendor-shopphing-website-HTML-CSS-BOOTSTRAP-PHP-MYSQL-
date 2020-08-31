<?php
include("con1.php");
session_start();
$st=1;
$st1=0;
if(isset($_GET['id']))
{

    $update_query = "update products set status ='$st' where id=".$_GET['id'];
    if(mysqli_query($con1,$update_query)){
        header("location: admin-dash.php");
}
}
?>