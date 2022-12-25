
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Food Items</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
                            <li role="presentation"><a href="additem.php">Add item</a></li>
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
    <div class="heading" style="margin-top:50px; padding:10px;">
        <h1 style="color:purple;">View Inventory</h1>
        <div>
            <p>Check your inventory here. Search item by pressing Ctrl+F</p>
        </div>
    </div>
    <div class="table-responsive itemtable">
        <table class="table">
            <thead>
                <tr>
                    <th>Item-id </th>
                    <th>Item-name </th>
                    <th>Category </th>
                    <th>In Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once("admintemplate.php");
                    $sql="SELECT * from inventory";
                    $result=mysqli_query($conn,$sql);
                    if($result->num_rows>0)
                    {
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["itemid"]."</td><td>".$row["itemname"]."</td><td>".$row["category"]."</td><td>".$row["instock"]."</td></tr>";

                    }
                    echo "</tbody>";
                echo "</table>";
            }
                else
                {
                    echo "No elements in the inventory.";
                }

                ?>
  
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>