<?php
session_start();
include '../dbh/dbh.php';
$sesid = $_SESSION['id'];
$sql="SELECT gamselect FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$gs1  = mysqli_fetch_assoc($result);

$sql="SELECT gameelect FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$gs2 = mysqli_fetch_assoc($result);

if($gs1['gamselect'] != 2 && $gs2['gameelect'] != 2) {
                echo "<script>
                window.location.href='../Lectii/index.php';
                alert('Trebuie sa fii inregistrat si sa ai activ unul dintre cele 3 pachete');
                </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ESports Academy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link rel="icon" href="../pictures/nicefavi.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <header class="csgoheader4">
        <div class="container1">
            <a href="Lectia3.php"><img src="../pictures/move-to-next-white.png" class="previous4"></a>
        <a href="../constructie/index.php"><img src="../pictures/move-to-next-white.png" class="next4"></a>
        <video width="1903" height="1070" autoplay loop style="position:relative; top: -42px;">
            <source src="../pictures/Cold.mp4" type="video/mp4">
              Your browser does not support the video tag.
        </video>
            <p></p>
            </div>
        <div class="container2">
        <h1>Counter-Strike: Global Offensive</h1>
            <h2>Recoil</h2>
        </div>
    </header>
    <main>
        <div class="navTop">
        <p class="title"><a href="../index.php" class="navtitle">ESPORTS ACADEMY</a></p>
            <div class="nav">
        <ul>
            <li><a href="../contact/index.php">Contact</a></li>
            <li><a href="../FAQ/index.php">FAQ</a></li>
            <li><a href="../login/logout.php" class="displaynone">Logout</a></li>
            <li><a href="../Lectii/index.php" class="displaynone">Lectii</a></li>
            <li><a href="../login/index.php" class="displaynav">Login</a></li>
            <li><a href="../inregistrare/index.php" class="displaynav">Inscriere</a></li>
        </ul>
            </div>
                    <?php
            if(isset($_SESSION['id'])){
                    echo "<style>.displaynav { display:none;}</style>";
                    echo "<style>.displaynone { display: block;}</style>";
            }

?>
        </div>
        <div class="bodycsgo4">
            <div class="recoil1">
            <p class="p1">Recoil-ul in CS GO este predictibil, de aceea trebuie invatat tiparul.<br>Mai jos aveti recoil-ul la cele mai importante arme.</p>
                <div class="imgrec2">
                <img src="../pictures/ak-47rec.gif" class="ak">
                <img src="../pictures/m4a4rec.gif" class="m4a4">
                <img src="../pictures/m4a1-srec.gif" class="m4a1">
                <img src="../pictures/famasrec.gif" class="famas">
                <img src="../pictures/galilrec.gif" class="galil">
                <img src="../pictures/augrec.gif" class="aug">
                <img src="../pictures/augscoperec.gif" class="augs">
                <img src="../pictures/sg553rec.gif" class="sg">
                </div>
                    <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=419404847"><img src="../pictures/recoilworkshop.jpg" class="workrec"></a>
                <p class="p2">Trebuie sa trage-ti mouse-ul in jos, stanga sau dreapta in functie de imaginile de mai sus pentru armele respective</p>
            </div>
        </div>
    </main>
    <footer class="footercsgo4">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://discord.gg/YZXfURa"><img src="../pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    <script src="js/jquery.js"></script>
    </body>

</html>
