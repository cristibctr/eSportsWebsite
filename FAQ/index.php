<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ESports Academy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link rel="icon" href="../pictures/nicefavi.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <header class="headerfaq">
        <h1>FAQ</h1>
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
        <div class="bodyfaq">
            <h2 class="q1h2">ESport - O pierdere de timp sau un sport adevarat?</h2>
           <p class="q1p"> Avand in vedere faptul ca in ultimii ani Sporturile electronice au crescut din ce in ce mai mult ajungand sa aiba mai multi spectatori ca multe<br>
dintre sporturile fizice jucatorii au acumulat castiguri din ce in ce mai mari. Cel mai mare castig avand loc in 2016 la "The International 2016",<br>
concurs de Dota 2 cu premii totale de 20 de milioane de dolari. Aceste doua lucruri fac sporturile electornice demne de a fi recunoscute international <br>iar noi va putem lansa chiar acum pentru a deveni cel mai bun.</p>
            <h2 class="q2h2">In ce consta aceasta academie?</h2>
            <p class="q2p">Pentru dumneavoastra am cautat si am angajat unii dintre cei mai buni jucatori din tara cu care sa va antrenati pentru a deveni campioni.<br>
Am pregatit si niste lectii sistematizate pentru a invata si a pune in practica tehnicile de defensiva si atac folosite in cele mai importante jocuri.<br>
Partea cea mai buna fiind programul foarte flexibil pe care vi-l puteti stabili dumneavoastra datorita faptului ca tot<br> ce facem aici se bazeaza
pe mediul online.</p>
            <h2 class="q3h2">Care sunt metodele de plata?</h2>
            <p class="q3p">Momentan nu acceptam decat paypal dar vom mai adauga si alte modalitati in curand</p>
            <h2 class="q4h2">Dupa ce m-am abonat pot sa ma dezabonez?</h2>
            <p class="q4p">Cu siguranta veti putea sa va dezabonati in orice moment de la noi dar plata pe acea luna nu va putea fi returnata.</p>
            
        </div>
    </main>
    <footer class="footerfaq">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    <script src="js/jquery.js"></script>
    </body>

</html>
