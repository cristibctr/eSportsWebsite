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
    <link rel="icon" href="pictures/nicefavi.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <header class="headersuccess">
        <h1 class="thh1">Va multumim pentru achizitie!</h1>
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
            </div>
            <?php
                if(isset($_SESSION['id'])){
                        echo "<style>.displaynav { display:none;}</style>";
                        echo "<style>.displaynone { display: block;}</style>";
                }
    ?>
            <div class="thanks">
            </div>
        </main>
        <footer class="footersuccess">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://discord.gg/YZXfURa"><img src="../pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
        </footer>
    </body>

</html>
