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