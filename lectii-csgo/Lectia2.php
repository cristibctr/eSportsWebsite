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
    <header class="csgoheader2">
        <h1>Counter-Strike: Global Offensive</h1>
        <h2>Incepe-ti cu ce nu va place</h2>
                <a href="Lectia1.php"><img src="../pictures/move-to-next-white.png" class="previous"></a>
        <a href="Lectia3.php"><img src="../pictures/move-to-next-white.png" class="next"></a>
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
        <div class="bodycsgo2">
            <div class="aboutsmokes">
                <p class="def1"><b>Smoke/Incendiary/Molotov:</b> Cu ajutorul acestora puteti prelua controlul unei parti din harta sau sa opriti un "Rush" </p>
                <p class="def2"><b>Flashbang:</b> Este folosit pentru a obtine un avantaj in cazul in care este folosit corect.</p>
                <p class="def3"><b>HE Grenade:</b> Scade din viata jucatorului daca aceasta cade langa el. Poate fi folosit de asemenea in cazul unui "Rush" pentru a castiga timp sau pentru a elimina un jucator.</p>
            </div>
            <div class="smokes">
                <h3 class="h31">Smokes</h3>
                <h3 class="h32">Molotov/Incendiary</h3>
                <div class="middlebar"></div>
                <div class="middlebullet"></div>
                <div class="middlebullet2"></div>
                <div class="middlebar2"></div>
                <p class="text2">La fel ca la Smoke-uri, acestea nu trebuie retinute toate.</p>
                <img src="../pictures/smoke.png" class="img1">
                <img src="../pictures/Incgrenadehud_csgo.png" class="img2">
                <p class="text1">Bineinteles, nu trebuie invatate toate smoke-urile dar pentru a avea controlul hartii trebuie sa alegeti unele pe care sa le stiti.</p>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/B1-34bk772k" frameborder="0" allowfullscreen class="iframe1"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/aCy79AAY48Y" frameborder="0" allowfullscreen class="iframe2"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/ROwKPZ2qLy4" frameborder="0" allowfullscreen class="iframe3"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/TwmKpiEWF-A" frameborder="0" allowfullscreen class="iframe4"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/dE__PKs9YVE" frameborder="0" allowfullscreen class="iframe5"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/4hZP11uTRto" frameborder="0" allowfullscreen class="iframe6"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/U8HkxjNhKZ0" frameborder="0" allowfullscreen class="iframe8"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/cqaQH-hZtmc" frameborder="0" allowfullscreen class="iframe9"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/WeGvd6ff20E" frameborder="0" allowfullscreen class="iframe7"></iframe>
                <iframe width="133" height="75" src="https://www.youtube.com/embed/Kms76qSMyCU" frameborder="0" allowfullscreen class="iframe10"></iframe>
                <iframe width="133" height="75" src="https://www.youtube.com/embed/dkEFYPjTtX4" frameborder="0" allowfullscreen class="iframe11"></iframe>
                <iframe width="133" height="75" src="https://www.youtube.com/embed/ihDeF-QdoHI" frameborder="0" allowfullscreen class="iframe12"></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/giJjDeuN53M" frameborder="0" allowfullscreen class="iframe13"></iframe>
                <iframe width="200" height="157" src="https://www.youtube.com/embed/7SpZDR7XGZM" frameborder="0" allowfullscreen class="iframe14"></iframe>
                <iframe width="200" height="157" src="https://www.youtube.com/embed/ZOY_yvT8KYo" frameborder="0" allowfullscreen class="iframe15"></iframe>
                
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
