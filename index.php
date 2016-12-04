<?php
include 'connector.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pos-software</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">POS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-tasks"></span> Pos</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tags"></span> Product</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> People <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Customers</a></li>
                                <li><a href="#">Suppliers</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Sales</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Expense</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Categories  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Expense</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Report</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.navbar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tabs">
                                        <ul class="listTabs">
                                            <li><h5>1.<small>14:20</small></h5></li>
                                            <li><h5>2.<small>14:30</small></h5></li>
                                            <button type="button" class="btn btn-default btn-sm pull-right">Add <span class="glyphicon glyphicon-plus"></span></button>
                                        </ul>  
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <h4>Chose client</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-group-sm">View <span class="glyphicon glyphicon-user"></span></button>
                                        <button type="button" class="btn btn-default btn-group-sm">Add <span class="glyphicon glyphicon-user"></span></button>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control input-sm" placeholder="Disabled input">
                                            <option>deffault</option>
                                            <option>customer 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-sm" id="barcode" placeholder="Barcode scaner">
                                    </div>
                                </div>
                                <div class="col-md-12 productDiv" id="productDiv">
                                    <table class="table table-striped productTable" id="productTable">
                                        <col width="40%">
                                        <col width="10%">
                                        <col width="35%">
                                        <col width="10%">
                                        <col width="5%">
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantyty</th>
                                            <th>Total</th>
                                            <th>#</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <table class="table" width="100%">
                                        <tr>
                                            <td>SubTotal</td>
                                            <td id="subTotal">0.00 RSD</td>
                                            <td id="item">0 item</td>
                                        </tr>
                                        <tr>
                                            <td>PDV</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" value="20%" disabled>
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Discount</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" placeholder="N/A" id="discount" onkeyup="addDiscount();">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" placeholder="N/A" id="sumCash" disabled>
                                                    <div class="input-group-addon">RSD</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <div class="btn-group pull-left" role="group" aria-label="...">
                                        <button type="button" class="btn btn-danger btn-lg">CANCEL</button>
                                        <button type="button" class="btn btn-success btn-lg" onclick="addPayement();">PAYEMENT</button>
                                    </div>
                                </div>                                 

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body panelPills">
                                          <ul class="nav nav-pills" role="tablist">
                                              <?php
                                               $result=mysqli_query($link, "SELECT COUNT(id) as count FROM `product`");
                                               $row = mysqli_fetch_array($result);
                                               $count = $row['count'];
                                              ?>
                                              <li role="presentation" class="active" ><a href="#" onclick="getCategory('<?php echo 0; ?>');">All <span class="badge"><?php echo $count; ?></span></a></li>
                                            <?php
                                             $result=mysqli_query($link, "SELECT * FROM `category`");
                                             while($row = mysqli_fetch_array($result)){ 
                                                 
                                                 $name = $row['name'];
                                                 $id = $row['id'];
                                                 $result2=mysqli_query($link, "SELECT COUNT(id_category) as count FROM `product` WHERE id_category = $id");
                                                 $row2 = mysqli_fetch_array($result2);
                                                 $count = $row2['count'];
                                                         
                                                 ?>
                                                <li role="presentation" class="" ><a href="#" onclick="getCategory('<?php echo $id; ?>');"><?php echo $name; ?> <span class="badge"><?php echo $count; ?></span></a></li>
                                             <?php } ?>
                                     
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row" id="category">
                                        <?php
                                        $result=mysqli_query($link, "SELECT * FROM `product`");
                                        while($row = mysqli_fetch_array($result)){ ?>
                                           
                                        <div class="col-xs-6 col-md-2">
                                            <a href="#" class="thumbnail" onclick="addProduct('<?php echo $row['id']; ?>');">
                                              <img src="<?php echo $row['img']; ?>" alt="..." size=60px">
                                            <p align="center"><?php echo $row['name']; ?></p>
                                            <div align="center" class="spanOver"><?php echo number_format($row['price'],2); ?> Din.</div>
                                          </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- Modal -->
        <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                  <!--
                  ================================================================================== -->
                  
                  
                  
                  
                  
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
        
        <!-- Modal Ticket -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document" id="ticketModal">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ticket">Receipt</h4>
              </div>
              <div class="modal-body" id="modal-body">
                 <div id="printSection">
                    <!-- Ticket goes here -->
                 </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default hiddenpr" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-add hiddenpr" href="javascript:void(0)" onClick="pdfreceipt()">PDF</button>
                <button type="button" class="btn btn-add hiddenpr" onclick="email()">email</button>
                <button type="button" class="btn btn-add hiddenpr" onclick="PrintTicket()">print</button>
              </div>
            </div>
         </div>
        </div>
        <!-- /.Modal -->

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
