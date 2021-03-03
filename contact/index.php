<?php
session_start();
if (empty($_POST) === false){
    $errors = array();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($name) === true || empty($email) === true || empty($message) === true) {
        $errors[]='Numele, email-ul si mesajul sunt necesare!'; 
    }
    else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $errors[]='Adresa email este invalida';
        }
        else{
            if (ctype_alpha(str_replace(' ', '', $name)) === false){
                $errors[]='Numele trebuie sa contina numai litere';
            }
        }
        if(empty($errors) === true){
            mail('esportacademyro@gmail.com',$email.' '.$name, $message,'From: '.$email.', name:'.$name);
            header('Location: index.php?sent');
            exit();
            
        }
    }
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
    <header>
            <header class="headerfaq">
        <h1>Contact</h1>
    </header>
           
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
        <div class="contactbody">
            <?php
            if(isset($_GET['sent']) === true){
                echo '<p class="errorul">Email-ul a fost trimis. Multumim pentru contactare!</p>';
            }
            else {
                
                if(empty($errors)===false){
                    echo '<ul class="errorul">';
                    foreach($errors as $error){
                        echo '<li class=""errorli>', $error,'</li>';
                    }
                    echo'</ul>';
                }
                ?>
                <form action="" method="post">
                    <label for="name"></label>
                    <input type="name" name="name" id="name" class="name" placeholder="Nume" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nume'" <?php if(isset($_POST['name']) == true){ echo 'value="', strip_tags($_POST['name']),'"'; }?>>

                    <label for="email"></label>
                    <input type="text" name="email" id="email" class="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" <?php if(isset($_POST['email']) == true){ echo 'value="', strip_tags($_POST['email']),'"'; }?>>

                    <label for="message"></label>
                    <textarea name="message" id="message" class="textarea" placeholder="Mesaj.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesaj..'"><?php if(isset($_POST['message']) == true){ echo strip_tags($_POST['message']); }?></textarea>
                    <input type="submit" class="submit" value="Trimite" />
                </form>
            <?php
            }
            ?>
            <div class="cdata">
            <p>Telefon: 0757407134 / 0757292040</p>
                </div>
            </div>
    </main>
    <footer class="footercontact">
    <h3>ESPORTS ACADEMY</h3>
    <p class="designer">Site designed by Cristian Bucataru</p>
    <p class="author">Icons made by Madebyoliver, Freepik and Vectors Market from www.flaticon.com </p>
        <p class="contactfoot">Sau puteti sa ne contactati aici:</p>
        <a href="https://discord.gg/YZXfURa"><img src="../pictures/discord.png" class="dicordpng"></a>
        <a href="https://www.facebook.com/ESportsAcademyRomania/"><img src="../pictures/facebook-icon.png" class="facebookpng"></a>
        <a href="https://twitter.com/esportacademyRO"><img src="../pictures/twitter-icon.png" class="twitterpng"></a>
    </footer>
    <script src="js/jquery.js"></script>
    </body>

</html>
