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
    <header class="csgoheader3">
        <h1>Counter-Strike: Global Offensive</h1>
        <h2>Numele pozitiilor pe harta</h2>
        <p class="p">Picture made by NikkyyHD</p>
        <a href="Lectia2.php"><img src="../pictures/move-to-next-white.png" class="previous"></a>
        <a href="Lectia4.php"><img src="../pictures/move-to-next-white.png" class="next"></a>
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
        <div class="bodycsgo3">
            <p>Pictures made by Froosh</p>
            <div class="spotnames1">
                <div id="circle"><img src="../pictures/dust2call.png"><p>Dust 2</p></div>
            <div id="circle2"><img src="../pictures/miragecall.png"><p>Mirage</p></div>
            <div id="circle3"><img src="../pictures/cachecall.png"><p>Cache</p></div>
            <div id="circle4"><img src="../pictures/cobblecall.png"><p>Cobble Stone</p></div>
            <div class="middlebullet3"></div>
            </div>
            <div class="middlebullet4"></div>
            <div class="spotnames2">
            <div id="circle"><img src="../pictures/overpasscall.png"><p>Overpass</p></div>
            <div id="circle5"><img src="../pictures/nukecall.png"><p>Nuke</p></div>
            <div id="circle3"><img src="../pictures/Infernocall.png"><p>Inferno</p></div>
            <div id="circle4"><img src="../pictures/traincall.png"><p class="separate">Train</p></div>
            <div class="middlebullet3"></div>
            </div>
        </div>
    </main>
    <footer class="footercsgo2">
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
