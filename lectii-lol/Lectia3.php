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

if($gs1['gamselect'] != 4 && $gs2['gameelect'] != 4) {
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
    <header class="lolheader3">
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
        <div class="bodylol3">
            <h1>Munca de echipa</h1>
            <p>In joc vei fi nevoit sa vorbesti cu echipa ta pe parcursul meciului. Cateodata cand vei muri sau vei pierde s-ar putea sa te enervezi.<br/> Totul este ok atat timp cat nu tipi la ei sau dai vina pe ei. Te vei enerva si tu mai tare, si echipa ta si veti pierde cu siguranta dar daca <br/>incerci sa vezi ce a mers gresit si te vei corecta, nu numai ca vei castiga dar vei ajunge un jucator mai bun mult mai rapid.<br/> Daca altii tipa sau dau vina pe tine nu striga la ei, doar nu ii baga in seama si da-le "report". League of legends ar trebui sa fie <br/>distractiv iar daca tu nu simti asta nu vei mai castiga. De asemenea la sfarsitul jocului poti scrie "GG" chiar daca <br/>pierzi deoarece asta te va face sa te simti mai bine si sa uiti ca ai pierdut.</p>
            <iframe width="800" height="450" src="https://www.youtube.com/embed/ugXC7g3p0JU" frameborder="0" allowfullscreen ></iframe>
        </div>
    </main>
    <footer class="footerlol3">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://discord.gg/YZXfURa"><img src="../pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    </body>

</html>
