
<?php
include("con1.php");


    if (isset($_GET['id'])){
        $sql = "delete from products where id =".$_GET['id'];
        $sql1= "delete from pictures where product_id =".$_GET['id'];
        mysqli_query($con1,$sql);
        mysqli_query($con1,$sql1);
        header("location: seller-dash.php");
 } ?>






