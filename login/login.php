<?php
session_start();
include'../dbh/dbh.php';

$errors = array();

$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql="SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if($hash == 0){
    header("Location: index.php?error=empty");
    exit();
} else {


    $sql="SELECT * FROM user WHERE email='$email' AND pwd='$hash_pwd'";
    $result = mysqli_query($conn, $sql);

    if(!$row =mysqli_fetch_assoc($result)){
        header("Location: index.php");
    }
    else {
        $_SESSION['id'] = $row['id'];
        header("Location: ../index.php");
    }
}
//header("Location: index.php");
?>