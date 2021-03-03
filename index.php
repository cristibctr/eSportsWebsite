<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ESports Academy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link rel="icon" href="pictures/nicefavi.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <header class="header">
      <div class="relative">
        <h1><a href="index.php" class="title">ESPORTS ACADEMY</a></h1>
        <img src="pictures/nicelogo1.jpg" class="logo">
        <h2>Viitorul sportului electronic in Romania</h2>
        <div class="nav">
        <ul>
            <li><a href="contact/index.php">Contact</a></li>
            <li><a href="FAQ/index.php">FAQ</a></li>
            <li><a href="login/logout.php" class="displaynone">Logout</a></li>
                        <li><a href="Lectii/index.php" class="displaynone">Lectii</a></li>
            <li><a href="login/index.php" class="displaynav">Login</a></li>
            <li><a href="inregistrare/index.php" class="displaynav">Inscriere</a></li>
        </ul>
            </div>
      </div>
    </header>
    <main>
        <div class="navTop">
        <p class="title"><a href="index.php" class="navtitle">ESPORTS ACADEMY</a></p>
            <div class="nav">
        <ul>
            <li><a href="contact/index.php">Contact</a></li>
            <li><a href="FAQ/index.php">FAQ</a></li>
            <li><a href="login/logout.php" class="displaynone">Logout</a></li>
            <li><a href="Lectii/index.php" class="displaynone">Lectii</a></li>
            <li><a href="login/index.php" class="displaynav">Login</a></li>
            <li><a href="inregistrare/index.php" class="displaynav">Inscriere</a></li>
        </ul>
            </div>
        </div>
        <?php
            if(isset($_SESSION['id'])){
                    echo "<style>.displaynav { display:none;}</style>";
                    echo "<style>.displaynone { display: block;}</style>";
            }
?>
    <div class="box">
        <div class="pngs">
        <img src="pictures/LAN.png" class="png">
        <img src="pictures/eread.png" class="png">
        <img src="pictures/first-place.png" class="png">
        <img src="pictures/gamepad.png" class="png">
        <img src="pictures/server.png" class="png">
            <div class="pngtxt">
            <p>Instructaj live</p>
            <p>Lectii structurate</p>
            </div>
            <div class="pngtxt2">
            <p class="p3">Analiza joc</p>
            <p class="p4">Servere dedicate</p>
            </div>
        </div>
        <p class="paragraphbox1">Devin-o <b>profesionist</b> cu ajutorul echipei noastre formate din cei mai buni jucatori din romania</p>
        </div>
    <div class="divimg">
        <p>Cine suntem?</p>
        </div>
    <div class="box2">
        <div class="presentation1">
            <div class="number1"><p>1</p></div>
            <img src="pictures/boss.png">
            <div class="about"><p>CEO (Sef executiv) Bucataru Cristian</p></div>
        </div>
        <div class="presentation2">
            <div class="number2"><p>2</p></div>
            <img src="pictures/man.png">
            <div class="about"><p>COO (Directorul general administrativ) Bujor Bogdan</p></div>
        </div>
        <div class="presentation3">
            <div class="number3"><p>3</p></div>
            <img src="pictures/people.png">
            <div class="about"><p>Echipa noastra formata din cei mai buni jucatori din romania</p></div>
        </div>
        </div>
    <div class="divimg2">
        <p>Oferte / Preturi? Ne-am gandit la toate</p>
    </div>
        <div class="box3">
            <table id="mytable">
<tbody>
<tr class="copen">
<td class="copen">&nbsp;</td>
<td class="copen">&nbsp;Incepator</td>
<td class="copen">Mediu</td>
<td class="copen">Avansat</td>
</tr>
<tr>
<td class="copen">&nbsp;Analiza demo/videoclip meciuri</td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
</tr>
<tr>
<td class="copen">&nbsp;Lectii Structurate</td>
    <td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
</tr>
<tr>
<td class="copen">&nbsp;Instructor Personal</td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10008;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
</tr>
<tr>
<td class="copen">&nbsp;Server</td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10008;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
</tr>
<tr>
<td class="copen">&nbsp;Pana la 2 jocuri</td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10008;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10008;</span></td>
<td>&nbsp; <span style="position:absolute; color: #677077; font-size: 50px;">&#10004;</span></td>
</tr>
<tr>
<td class="copen" style="width: 400px;">Pret</td>
<td style="color: #677077">&nbsp; 10 euro/luna</td>
<td style="color: #677077">&nbsp; 15 euro/luna</td>
<td style="color: #677077">&nbsp; 20 euro/luna</td>
    </tr>
<tr>
    <td></td>
        <td style="width: 500px"><form action=" <?php
            if(isset($_SESSION['id'])){echo 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=35FWJGDE4MZ64';} else {echo 'login/index.php';} ?>" method="post">
        <input type="hidden" name="custom" value="<?php echo $_SESSION['id'];?>"/>
        <button type="submit" class="mybutton"><p>Cumpara</p></button>
        </form></td>
        <td style="width: 500px"><form action="<?php
            if(isset($_SESSION['id'])){echo 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=35FWJGDE4MZ64';} else {echo 'login/index.php';} ?>" method="post">
        <input type="hidden" name="custom" value="<?php echo $_SESSION['id'];?>"/>
        <button type="submit" class="mybutton"><p>Cumpara</p></button>
        </form></td>
        <td style="width: 500px"><form action="<?php
            if(isset($_SESSION['id'])){echo 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=35FWJGDE4MZ64';} else {echo 'login/index.php';} ?>" method="post">
        <input type="hidden" name="custom" value="<?php echo $_SESSION['id'];?>"/>
        <button type="submit" class="mybutton"><p>Cumpara</p></button>
        </form></td>
    </tr>
</tbody>
</table>
        </div>
    <div class="box4">
        <p class="p1">Pentru mai multe informatii accesati sectiunea FAQ din bara de navigare</p>
        <p class="p2">Doresti sa devii instructor si sa faci parte din echipa noastra? Acceseaza pagina Contact sau scrie-ne un email la adresa esportacademyro@gmail.com</p>
        <p class="p3">Echipa ESPORTS ACADEMY va multumeste pentru vizita </p>
        </div>
    </main>
    <footer class="footerhome">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <a href="https://discord.gg/YZXfURa"><img src="pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90849102-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>

</html>
