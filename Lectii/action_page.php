<?php
include '../dbh/dbh.php';
session_start();
$sesid = $_SESSION['id'];
$gs1 = $_POST['gamselect'];
$gs2 = $_POST['gameelect'];
$sql="SELECT paid FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$paid = mysqli_fetch_assoc($result);

$sql= "UPDATE user SET gameselect='1' WHERE id= '$sesid'";
mysqli_query($conn, $sql);
$sql= "UPDATE user SET gamselect=$gs1 WHERE id= '$sesid'";
mysqli_query($conn, $sql);
if ($paid['paid'] >= 15){
$sql= "UPDATE user SET gameelect=$gs2 WHERE id= '$sesid'";
mysqli_query($conn, $sql);
}
header("Location: index.php");
?>