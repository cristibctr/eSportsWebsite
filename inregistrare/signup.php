<?php
session_start();
include'../dbh/dbh.php';
$errors=array();
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql="SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
if(empty($first && $last && $uid && $pwd)){
    header("Location: index.php?empty");
}
else {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        header("Location: index.php?email");
    }
     else {
         if(mysqli_num_rows($result)>=1)
        {
    header("Location: index.php?uidex");
   }
 else
    {
        $encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
   $sql="INSERT INTO user (first, last, uid, email, pwd) 
VALUES ('$first', '$last', '$uid', '$email', '$encrypted_password')";
$result = mysqli_query($conn, $sql);

header("Location: index.php?registred");
    }

    }
}
?>