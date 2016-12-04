<?php

include "pro_head.php";

?>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <button class="btn btn-primary pull-right" onclick="addNewProduct();">Add product</button>
    </div>
    <hr>
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-bordered table-hover customTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Com</th>
                    <th>Category</th>
                    <th>#</th>
                </tr>
            </thead>
            <?php
            $i = 1;
            $result = mysqli_query($link, "SELECT * FROM product");
            while($res = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><b><?php echo $i; ?></b></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php //echo $res['name']; ?></td>
                    <td><?php echo $res['price']; ?></td>
                    <td><?php echo $res['com']; ?></td>
                    <td><?php //echo $res['name']; ?></td>
                    <td>
                        <ul class="customEdit">
                            <li><span class="glyphicon glyphicon-pencil"></span></li>
                            <li><span class="glyphicon glyphicon-remove"></span></li>
                            <li><span class="glyphicon glyphicon-file"></span></li>
                        </ul>
                    </td>
                </tr>
            <?php $i++; } ?>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add new producte</h4>
      </div>
      <div class="modal-body">
          <!--
          ================================================================================== -->

              <div class="form-group">  
              <select class="form-control">
                  <option value="0">Select category ...</option>
                  <?php
                  $result = mysqli_query($link, "SELECT * FROM category");
                  while($row = mysqli_fetch_array($result)){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                  <?php } ?>
              </select>
              </div>
              <div class="form-group">
              <input type="text" class="form-control" placeholder="Name of product">
              </div>
              <div class="form-group">
              <textarea class="form-control" placeholder="Description of product"></textarea>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Price">
                    <div class="input-group-addon">RSD</div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Com"></textarea>
              </div>
              <div class="form-group">
                <input type="file" id="exampleInputFile">
                <p class="help-block pull-left">Inser product image.</p>
              </div>


          <!--
          ================================================================================== -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php

include "pro_footer.php";

?>