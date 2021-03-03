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
    <header class="lolheader6">
            <a href="Lectia5.php"><img src="../pictures/move-to-next-white.png" class="previous"></a>
            <a href="../constructie/index.php"><img src="../pictures/move-to-next-white.png" class="next"></a>
            <h1>League of Legends</h1>
            <h2>Turete Inhibitori Nexus</h2>
            <p>DeviantArt</p>
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
        <div class="bodylol6">
<div class="tin">
            <h2>Turete</h2>   
            <p>
                In afara de minioni si campioni mai exista turetele care dau damage foarte mare si te pot omora imediat. Pentru a le combate trebuie intotdeauna sa stai in spatele minionilor si sa le ataci. Astfel avansezi pe culoar spre baza inamica.
            </p>
            <img src="../pictures/turretblue.png" class="turretblue">
            <img src="../pictures/turretpurple.png" class="turretpurple">
</div>
<div class="tin2">
            <h2>Inhibitori</h2>
            <p>
                Inhibitorii au rolul de a trimite super minioni si de a creste punctele de damage la restul minionilor in momentul in care au fost distruse. Acestea reapar dupa 5 minute de la distrugere iar super minionii inceteaza sa mai apara.
            </p>
            <img src="../pictures/inhibitor.png">
</div>
<div class="tin3">
            <h2>Nexus</h2>
            <p class="Nexus">
                El este aparat de 2 cele mai puternice turete dar care se regenereaza foarte incet. In momentul in care il distrugi esti declarat invingator.
            </p>
            <img src="../pictures/nexus.png">
</div>
        </div>
    </main>
    <footer class="footerlol4">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://discord.gg/YZXfURa"><img src="../pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    </body>

</html>