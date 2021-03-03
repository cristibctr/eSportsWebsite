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
    <header class="lolheader">
        <h1>League of Legends</h1>
        <h2>Campioni</h2>
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
            else { 
                echo "<script>
                window.location.href='../index.php';
                alert('Trebuie sa fii inregistrat si sa ai activ unul dintre cele 3 pachete');
                </script>";
                 }
?>
        </div>
        <div class="bodylol">
            <div class="assassin">
                <h2>Assassin</h2>
                <p class="p">Campionii de acest tip sunt specializati in a omora alt campion cat mai repede posibil. <br/>De obicei acesti campioni sunt puternici si greu de omorat daca sunt feedati.</p>
                <img src="../pictures/ahri.png"><p class="champass" id="ahri">Ahri</p>
                <img src="../pictures/fizz.png"><p class="champass" id="fizz">Fizz</p>
                <img src="../pictures/katarina.png"><p class="champass">Katarina</p>
                <img src="../pictures/leblanc.png"><p class="champass">Leblanc</p>
                <img src="../pictures/akali.png"><p class="champass" id="akali">Akali</p>
            </div>
            <div class="carry">
                <h2>Carry</h2>
                <p class="p">Campionii de acest tip sunt slabi la inceputul meciului dar foarte puternici la sfarsit. <br/>De obicei acesti campioni au rata K/D (kill/death) foarte mare.</p>
                <img src="../pictures/ashe.png"><p class="champass2">Ashe</p>
                <img src="../pictures/miss-fortune.png"><p class="champass2" id="mf">Miss-Fortune</p>
                <img src="../pictures/varus.png"><p class="champass2">Varus</p>
                <img src="../pictures/vayne.png"><p class="champass2">Vayne</p>
            </div>
            <div class="fighter">
                <h2>Fighter</h2>
                <p class="p">Acest tip de campion combina atributele unui campion "tank" si ale unuia de tip "damager". <br/>Combinat cu un assassin sau carry acesta va poate aduce victoria.</p>
                <img src="../pictures/jax.png"><p class="champass3">Jax</p>
                <img src="../pictures/jayce.png"><p class="champass3">Jayce</p>
                <img src="../pictures/nunu.png"><p class="champass3">Nunu</p>
                <img src="../pictures/wukong.png"><p class="champass3" id="wukong">Wukong</p>
            </div>
            <div class="jungler">
                <h2>Jungler</h2>
                <p class="p">Un jungler este un campion care omoara monstrii din jungla. <br/>El ajuta coechipierii pentru a face "ganking" (ganking = lupta nedreapta. ex: 1vs2).</p>
                <img src="../pictures/volibear.png"><p class="champass3">Volibear</p>
                <img src="../pictures/diana.png"><p class="champass3">Diana</p>
                <img src="../pictures/elise.png"><p class="champass3">Elise</p>
                <img src="../pictures/warwick.png"><p class="champass3" id="wukong">Warwick</p>
            </div>
            <div class="mage">
                <h2>Mage</h2>
                <p class="p">Puterea magiei este foarte ridicata dar in schimb prezinta aparare foarte scazuta. <br/>Este foarte bun pe parcursul meciului dar la sfarsit are un efect foarte mic asupra jocului.</p>
                <img src="../pictures/annie.png"><p class="champass3">Annie</p>
                <img src="../pictures/lux.png"><p class="champass3">Lux</p>
                <img src="../pictures/rumble.png"><p class="champass3">Rumble</p>
                <img src="../pictures/swain.png"><p class="champass3">Swain</p>
            </div>
            <div class="pusher">
                <h2>Pusher</h2>
                <p class="p">Cu ajutorul lor este foarte usor sa omori minioni si turete deoarece au viteza de atac foarte mare. <br/>De obicei acestia au un animal langa ei cu care ataca.</p>
                <img src="../pictures/alistar.png"><p class="champass3">Alistar</p>
                <img src="../pictures/nidalee.png"><p class="champass3">Nidalee</p>
                <img src="../pictures/viktor.png"><p class="champass3">Viktor</p>
                <img src="../pictures/ziggs.png"><p class="champass3">Ziggs</p>
            </div>
            <div class="ranged">
                <h2>Ranged</h2>
                <p class="p">Atacul lor de baza poate cauza daune de la distanta. <br/>Ei pot evita foarte usor atacurile dupa care pot fugi.</p>
                <img src="../pictures/brand.png"><p class="champass3">Brand</p>
                <img src="../pictures/corki.png"><p class="champass3">Corki</p>
                <img src="../pictures/draven.png"><p class="champass3">Draven</p>
                <img src="../pictures/lulu.png"><p class="champass3">Lulu</p>
            </div>
            <div class="recommended">
                <h2>Recommended</h2>
                <p class="p">Pentru a juca cu acesti campioni nu ai nevoie de abilitati foarte avansate sau de strategii complicate. <br/>De asemenea, nu ai nevoie de cunostiine despre alti campioni.</p>
                <img src="../pictures/ashe.png"><p class="champass3">Ashe</p>
                <img src="../pictures/garen.png"><p class="champass3">Garen</p>
                <img src="../pictures/katarina.png"><p class="champass3">Katarina</p>
                <img src="../pictures/taric.png"><p class="champass3">Taric</p>
            </div>
            <div class="support">
                <h2>Support</h2>
                <p class="p">Campioni ale caror abilitati ajuta restul echipei. Ei pot vindeca echipa sau pot sa arunce buffuri asupra<br/>echipei adverse. De obicei acestia se bazeaza mai mult pe abilitati decat pe atacul automat.</p>
                <img src="../pictures/nami.png"><p class="champass3">Nami</p>
                <img src="../pictures/soraka.png"><p class="champass3">Soraka</p>
                <img src="../pictures/teemo.png"><p class="champass3">Teemo</p>
                <img src="../pictures/zilean.png"><p class="champass3">Zilean</p>
            </div>
            <div class="stealth">
                <h2>Stealth</h2>
                <p class="p">Campionii care au cel putin o abilitate de a deveni invizibili in fata inamicului sunt de tip stealth.<br/> De obicei acestia sunt assassini.</p>
                <img src="../pictures/rengar.png"><p class="champass3">Rengar</p>
                <img src="../pictures/shaco.png"><p class="champass3">Shaco</p>
                <img src="../pictures/twitch.png"><p class="champass3">Twitch</p>
                <img src="../pictures/vayne.png"><p class="champass3">Vayne</p>
            </div>
        </div>
    </main>
    <footer class="footerlol">
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
