<?php
session_start();
include '../dbh/dbh.php';
if(!isset($_SESSION['id'])) header('Location: ../index.php');
$sesid = $_SESSION['id'];
$sql="SELECT paid FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$paid = mysqli_fetch_assoc($result);

$sql="SELECT gameselect FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$gs = mysqli_fetch_assoc($result);

$sql="SELECT gamselect FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$gs1  = mysqli_fetch_assoc($result);

$sql="SELECT gameelect FROM user WHERE id='$sesid'";
$result = mysqli_query($conn, $sql);
$gs2 = mysqli_fetch_assoc($result);

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
    <header class="headerlectii">
        <h1>Lectii</h1>
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
        <div class="bodylectii">
            <div class="gameselect">
                <form action="action_page.php" method="post">
                    <select name="gamselect" class="select1">
                        <option value="2">Counter-Strike Global Offensive</option>
                        <option value="3">Overwatch</option>
                        <option value="4">League of Legends</option>
                        <option value="5">Dota2</option>
                    </select>
                    <select name="gameelect" class="select2" <?php if($paid['paid'] <= 15) echo "style='color: #9b9b9b'"?> <?php if($paid['paid'] <= 15) echo "disabled"?>>
                        <option value="2">Counter-Strike Global Offensive</option>
                        <option value="3">Overwatch</option>
                        <option value="4">League of Legends</option>
                        <option value="5">Dota2</option>
                    </select>
                    <input type="submit" value="Selectare">
                </form>
            </div>
            <?php
                if ($paid['paid'] == 0 || $gs['gameselect'] == 1) {echo "<style>.gameselect {display: none;}</style>";}
            ?>
            <div class="rightbox">
                <p>MOBA</p>
                <a href="<?php if($gs1['gamselect'] == 5 || $gs2['gameelect'] == 5) {echo '../constructie/index.php';} 
                         else {echo ' ';}?>"><div class="dotadiv"></div></a>
                <?php if($gs1['gamselect'] == 5 || $gs2['gameelect'] == 5) {echo '<style> .dotadiv{ background-image: url(../pictures/dota2img.jpg)}</style>';} ?>
                <a href="<?php if($gs1['gamselect'] == 4 || $gs2['gameelect'] == 4) {echo '../lectii-lol/Lectia1.php';} 
                         else {echo ' ';}?>"><div class="loldiv"></div></a>
                <?php if($gs1['gamselect'] == 4 || $gs2['gameelect'] == 4) {echo '<style> .loldiv{ background-image: url(../pictures/lolimg.jpg)}</style>';} ?>
            </div>
            <div class="leftbox">
                <p>Shooter</p>
                <a href="<?php if($gs1['gamselect'] == 2 || $gs2['gameelect'] == 2) {echo '../lectii-csgo/Lectia1.php';} 
                         else {echo ' ';}?>"><div class="csgodiv"></div></a>
                    <?php if($gs1['gamselect'] == 2 || $gs2['gameelect'] == 2) {echo '<style> .csgodiv{ background-image: url(../pictures/csgoimg.jpg)}</style>';} ?>
                <a href="<?php if($gs1['gamselect'] == 3 || $gs2['gameelect'] == 3) {echo '../constructie/index.php';} 
                         else {echo ' ';}?>"><div class="owdiv"></div></a>
                <?php if($gs1['gamselect'] == 3 || $gs2['gameelect'] == 3) {echo '<style> .owdiv{ background-image: url(../pictures/overwatchimg.jpg)}</style>';} ?>
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
