<?php
session_start();
include("connect.php");
if(isset($_POST["submit"])){
if(!empty($_POST["username"]) && !empty($_POST["password"])){
$name=$_POST["username"];
$password=$_POST["password"];
$query = mysqli_query($dbh, "SELECT * FROM login WHERE name='$name'");
$row= mysqli_fetch_array($query,MYSQLI_ASSOC);

if($row['password']==$password)
{
$_SESSION['sess_sec']=$row['section'];
$_SESSION['user']=$name;
header("Location:index.html");
}
else
{
echo "Invalid username or password";
}}

}

?>
