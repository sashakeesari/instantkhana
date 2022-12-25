<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
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
                            <li role="presentation"><a href="viewinventory.php">View Food Items</a></li>
                            <li role="presentation"><a href="additem.php">Add item</a></li>
                            <li role="presentation"><a href="deleteitem.php">Delete item</a></li>
                            <li role="presentation"><a href="#">Orders</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="adminlogin.php">Sign out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="introduction">
        <h1 style="color:blue;">Update Price</h1>
        <p>Update Price here</p><br>
        <form method="POST">
            <div class="inputs">
                <input type="number" name ="itemid" placeholder="Item Id" autocomplete="off" > OR 
                <input type="text" name="itemname" placeholder="Item Name" autocomplete="off"> <br><br>
                <input type="number" name ="stock" placeholder="Update Price" required autocomplete="off" ><br><br>
                <button class="btn1" type="submit">Done</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include_once("admintemplate.php");
if(isset($_POST['itemid']) || isset($_POST['itemname']))
{
$itemid=$_POST['itemid'];
$itemname=$_POST['itemname'];
$updatestock=$_POST['stock'];
// $previouscount = "SELECT instock from inventory where itemid='$itemid' OR itemname='$itemname'";
$query="UPDATE inventory SET instock='$updatestock' WHERE itemid='$itemid' OR itemname='$itemname'"; // Update the item if present
$query2="SELECT itemid,itemname,category from inventory where itemid='$itemid' OR itemname='$itemname'"; // Check if there is any such item to be updated

$check=mysqli_query($conn,$query2);
$result=mysqli_query($conn,$query);


if(mysqli_num_rows($check)==1)
{
    if($result)
    {
        
        echo "Price Updated successfully";
    }
    else 
    echo "Item could not be updated";
}
else echo "No such item found";
}



?>