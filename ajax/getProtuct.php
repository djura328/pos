<?php
include '../connector.php';

$id = $_POST['id'];

if($id == 0){
    $result=mysqli_query($link, "SELECT * FROM `product`");
}
else{
    $result=mysqli_query($link, "SELECT * FROM `product` WHERE id_category = $id");
}

while($row = mysqli_fetch_array($result)){ ?>

<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail" onclick="addProduct('<?php echo $row['id']; ?>');">
      <img src="<?php echo $row['img']; ?>" alt="..." size=60px">
    <p align="center"><?php echo $row['name']; ?></p>
    <div align="center" class="spanOver"><?php echo number_format($row['price'],2); ?> Din.</div>
  </a>
</div>
<input type="hidden" value="<?php echo $id; ?>" id="heddenId">
<?php } ?>