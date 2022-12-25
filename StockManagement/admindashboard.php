<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>

<body >
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Redirect to <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="admindashboard.php">Admin Dashboard</a></li>
                            <li role="presentation"><a href="additem.php">Add item</a></li>
                            <li role="presentation"><a href="deleteitem.php">Delete item</a></li>
                            <li role="presentation"><a href="#">Orders</a></li>
                            <li role="presentation"><a href="updateinventory.php">Update Stock</a></li>
                        </ul>
                    </li> -->
                    <li role="presentation"><a href="adminlogin.php">Sign out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="introduction">
        <div class="row" >
            <div class="col-md-12">
                <h1>Hey there <?php echo $_SESSION["adminname"] ?>,</h1></div>
            <div class="col-md-6">
                <a href="viewinventory.php"><button class="btn1" type="button" >View Food Item</button><a>
            </div>
            <div class="col-md-6">
                <a href="additem.php"><button class="btn1" type="button">Add Item</button></a>
            </div>
            <div class="col-md-6">
                <a href="deleteitem.php"><button class="btn1" type="button">Delete Item</button></a>
            </div>
            <div class="col-md-6">
                <button class="btn1" type="button">Orders </button>
            </div>
            <div class="col-md-12">
                <a href="updateinventory.php"><button class="btn1" type="button">Update Price</button></a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>