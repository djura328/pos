<?php
include '../connector.php';

$id = $_POST['id'];

$result=mysqli_query($link, "SELECT * FROM `product` WHERE id = $id");

$row = mysqli_fetch_array($result);


?>


<tr id="<?php echo $id."row"; ?>" class="idProduct">
    <td align="center"><?php echo $row['name']; ?></td>
    <td align="center" class="price"><?php echo $row['price']; ?></td>
    <td align="center" class="com"> 
        <div class="input-group">
          <div class="input-group-addon" onclick="removeCom('<?php echo $id; ?>');"><span class="glyphicon glyphicon-minus"></span></div>
          <input type="text" class="form-control inputCom" value="1"></input>
          <div class="input-group-addon" onclick="addCom('<?php echo $id; ?>');"><span class="glyphicon glyphicon-plus"></span></div>
        </div>
    </td>
    <td align="center" class="total"><?php echo $row['price']; ?></td>
    <td align="center"><span class="glyphicon glyphicon-remove" onclick="removeProduct('<?php echo $id; ?>')"></span></td>
</tr>