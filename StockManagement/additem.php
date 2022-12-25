<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Redirect to <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="admindashboard.php">Admin Dashboard</a></li>
                            <li role="presentation"><a href="viewinventory.php">View Food Item</a></li>
                            <li role="presentation"><a href="deleteitem.php">Delete item</a></li>
                            <li role="presentation"><a href="#">Orders</a></li>
                            <li role="presentation"><a href="updateinventory.php">Update Price</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="adminlogin.php">Sign out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="introduction">
        <h1 style="color:purple;">Add Item</h1>
        <p>Add Items here</p><br>
        <form method="POST">
            <div class="inputs">
                <input type="number" name ="itemid" placeholder="Item Id" required autocomplete="off"><br><br>
                <input type="text" name="itemname" placeholder="Item Name" required autocomplete="off"><br><br>
                <input type="text" name="category" placeholder="Category" required autocomplete="off"><br><br>
                <input type="number" name="stock" placeholder="In Stock" required autocomplete="off"><br><br>
                <button class="btn1" type="submit">Add </button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include_once("admintemplate.php");
if(isset($_POST['itemid']))
{
$itemid=$_POST['itemid'];
$itemname=$_POST['itemname'];
$category=$_POST['category'];
$stock=$_POST['stock'];
$query="INSERT INTO inventory(itemid, itemname, category, instock) VALUES ('$itemid','$itemname','$category','$stock')";
$result=mysqli_query($conn,$query);


if($result)
echo "Item inserted successfully";
else echo "Item already exists in the inventory. Update the stock.";
}



?>