<?php
    session_start();
    if (isset($_SESSION['id'])){
                    header("Location: ../index.html");
                }
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
    <header class="headerreg">
        <h1>Inscriere</h1>
    </header>
    <main>
        <div class="navTop">
        <p class="title"><a href="../index.php" class="navtitle">ESPORTS ACADEMY</a></p>
            <div class="nav">
        <ul>
            <li><a href="../contact/index.php">Contact</a></li>
            <li><a href="../FAQ/index.php">FAQ</a></li>
            <li><a href="../login/index.php">Login</a></li>
            <li><a href="../inregistrare/index.php">Inscriere</a></li>
        </ul>
            </div>
        </div>
        <div class="bodyreg">
            <?php
            if(isset($_GET['registred']) === true){
                echo '<p class="regconf">Inregistrare efectuata cu succes!</p>';
            }
            else {
                
                if(isset($_GET['empty']) === true){
                echo '<p class="regconf">Toate spatiile trebuie completate</p>';
                }
                else{
                    if(isset($_GET['email']) === true){
                echo '<p class="regconf">Adresa de email este invalida!</p>';
                }
                    else {
                        if(isset($_GET['uidex']) === true){
                echo '<p class="regconf">Username-ul exista deja. Te rugam alege altul.</p>';
                    }
                    }
                }
                ?>
       <form action="signup.php" method="POST">
            <input type="text" name="first" placeholder="Nume" class="regname">
            <input type="text" name="last" placeholder="Prenume" class="reglast">
            <input type="text" name="uid" placeholder="Username" class="reguid">
            <input type="text" name="email" placeholder="Email" class="regemail">
            <input type="password" name="pwd" placeholder="Parola" class="regpass">
            <button type="submit" class="regbutton">Inregistrare</button>
            </form>
            <?php
            }
            ?>
        </div>
    </main>
    <footer class="footerreg">
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
