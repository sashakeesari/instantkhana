


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>
<body>
    <section>
    <div class= "introduction">
    <form method="POST" action="#">
        <h3>Admin Login</h3>
         <br>
         <div class ="inputs">
        <input type="text" name="adminname" id="adminname" autofocus="on" autocomplete="off" placeholder="Enter your username:" required>
        <br><br>
        <input type="password" name="adminpass" id="adminpass" placeholder="Enter password:" required>
        <br>
        <br>
        </div>
        <input type="submit" class = "btn1" value="Submit">
        <br>

        </form>
    </div>
</body>
</html>

<?php
include_once("admintemplate.php");
if(isset($_POST["adminname"]))
{
    session_start();

$enterusername = $_POST["adminname"];
$enterpassword= $_POST["adminpass"];
$query="select * from adminlogin where auname='$enterusername' AND apassword='$enterpassword'";
$exec=mysqli_query($conn,$query);
if(mysqli_num_rows($exec)==1)
{
    $_SESSION["adminname"]=$enterusername;
    echo "<script>location.href='admindashboard.php'</script>";
}

else
echo "<br>Credentials are wrong please check again.";

}
?>