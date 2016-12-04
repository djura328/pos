<?php
include '../connector.php';

$id = $_POST['id'];



if(isset($_POST['com']) & !empty($_POST['com'])){
    $com = $_POST['com'];
    $result=mysqli_query($link, "SELECT com FROM `product` WHERE id = $id");
    while($row = mysqli_fetch_array($result)){
        $check = $row['com'];
        echo $check2 = $check - $com;
    }
}
else{
    $result=mysqli_query($link, "SELECT com FROM `product` WHERE id = $id");
    while($row = mysqli_fetch_array($result)){
        echo $check = $row['com'];
    } 
}

?>
