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
    <header class="csgoheader">
        <h1>Counter-Strike: Global Offensive</h1>
        <h2>Introducere</h2>
        <a href="Lectia2.php"><img src="../pictures/move-to-next-white.png" class="next"></a>
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
        <div class="bodycsgo">
            <div class="csgobox1">
                <div class="margleft"></div>
                <div class="margright"></div>
                <div class="text">
                <p class="p">Inainte de toate ar fi bine sa configurati jocul pentru a avea mai mult FPS.</p>
                    <p class="p1">Steam -> Library -> Click dreapta pe CS GO -> Properties -> Set launch options</p>
                <img src="../pictures/steam.jpg" class="steam1">
                    <img src="../pictures/move-to-next.png" class="arrow">
                    <img src="../pictures/steam2.jpg" class="steam2">
                </div>
            </div>
                <div class="csgobox2">
                    <p class="p">Copiaza setarile din dreapta si lipeste-le in Setarile de pornire (Launch options)</p>
                    <div class="launch"><p>-freq 144 -refresh 144  -high -novid -tickrate 128</p></div>
                    <p class="p1">Apasa ok si acum sa intram in joc.</p>
                    <img src="../pictures/steamok.jpg" class="ok">
                </div>
            <div class="csgo2"></div>
            <div class="csgobox3">
            <p class="text">Bineinteles, ca in oricare alt sport trebuie sa va antrenati zilnic pentru a deveni cei mai buni.</p>
                <p class="text">Plasati tinta la nivelul capului chiar si atunci cand nu vreti sa impuscati deoarece nu se stie niciodata ce e dupa colt.</p>
                <p class="text">Apasa-ti pe subscribe la aceste harti si intrati in cs go la play -> workshop pentru a va antrena.</p>
                <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=213240871" target="_blank"><img src="../pictures/aim1.jpg" class="img1"></a>
                <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=243702660" target="_blank"><img src="../pictures/aim2.jpg" class="img2"></a>
                <div class="lat1"></div>
                <p class="num1">2</p>
                <p class="num2">1</p>
                <div class="lat2"></div>
                <div class="lat3"></div>
                <p class="num3">3</p>
                <p id="text1">Nu uita sa iti schimbi sensvitatea! Cei mai buni jucatori au o sensivitate mica la mouse pentru a avea precizie (400dpi/2.2 in joc). <br>De asemenea trebuie dai raw input - on si mouse acceleration - off</p>
            </div>
        </div>
    </main>
    <footer class="footerfaq">
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
