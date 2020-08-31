<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/8/2018
 * Time: 2:58 PM
 */
    include('con1.php');

    global $id;
    global $title;
    global $price;
    global $description;
    global $date_added;
    global $status;
    global $user_id;
    global $category_id;

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $date_added= $_POST['date_added'];
        $status = $_POST['status'];
     
        
        $update_query = "update products set title = '$title' , price = '$price' ,description = '$description' ,date_added='$date_added' ,status='$status'  where id = ".$_POST['id'];
        if(mysqli_query($con1,$update_query)){
            header("location: seller-dash.php");
        }else{

        }
    }


    if(isset($_GET['id'])){
    $sql = "select * from products where id=".$_GET['id'];
    $result = mysqli_query($con1,$sql);

        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];
            $date_added = $row['date_added'];
            $status = $row['status'];
           
            
          
        }
    }
?>

<html>
    <body>
        <form action="update.php" method="post">
            <label>ID: </label>
            <input type="text" name="id" value="<?= $id ?>"><br>

            <label>Title: </label>
            <input type="text" name="title" value="<?= $title ?>"><br>

            <label>price: </label>
            <input type="float" name="price" value="<?= $price ?>"><br>

            <label>description: </label>
            <input type="text" name="description" value="<?= $description ?>"><br>

            <label>date_added: </label>
            <input type="date" name="date_added" value="<?= $date_added ?>"><br>

            
              
           

            <input type="submit" name="submit">
        </form>
    </body>
</html>





