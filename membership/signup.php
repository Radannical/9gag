<?php
    require __DIR__. '/classes/session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/effects.js"></script>
</head>
<body>
<div class="e0">

    <div class="e1"><img></div>

    <div class="title">

    </div>

    <div class="tab">
        <div class="nav1">
            <button onclick="navigation('pocetna');" class="btn" type="button">Pocetna</button>
        </div>
        <div class="nav2">
            <button onclick="navigation('projekti');" class="btn" type="button">Projekti</button>
        </div>
        <a href="../posts/index.php">
            <div class="nav3">
                <button class="btn" type="button">Postovi</button>
            </div>
        </a>
        <div class="nav4">
            <button onclick="navigation('o_meni');" class="btn" type="button">O meni</button>
        </div>
        <div class="nav5">
            <button onclick="navigation('galerija');" class="btn" type="button">Galerija</button>
        </div>
        <div class="nav6">
            <button onclick="navigation('kontakt');" class="btn" type="button">Kontakt</button>
        </div>
        <a href="../membership/index.php">
            <div class="nav7">
                <button class="btn" type="button">Moj Profil</button>
            </div>
        </a>

    </div>
    <div class="e2">

        <section id="left-column-postovi">
<div class="row">

    <div class="col s10 offset-s1 m11 l6 z-depth-1 white">
        <div class="center-align">
            <i class="mdi-hardware-laptop-mac prefix adlaptop"></i>
            <div class="divider"></div>
            <h2>Dashboard</h2>
           
        </div>
    </div>

    <div class="col s10 offset-s1 m11 l6 teal lighten-5">
        <div class="center-align">
            <h3>Sign up</h3>
            <p>Create your account and become member</p>
        </div>

        <form class="col s12" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">

                <span class="red lighten-5"><?= isset($_SESSION['error_general']) && !empty($_SESSION['error_general']) ? $_SESSION['error_general']: ''?></span>
                <?php session::destroy('error_general') ?>

                <span class="green lighten-2"><?= isset($_SESSION['confirmation']) && !empty($_SESSION['confirmation']) ? $_SESSION['confirmation']: ''?></span>
                <?php session::destroy('confirmation') ?>

                <div class="input-field col s10 offset-s1">
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">Your email</label>

                    <span class="red lighten-5"><?= isset($_SESSION['error_email']) && !empty($_SESSION['error_email']) ? $_SESSION['error_email']: ''?></span>
                    <?php session::destroy('error_email') ?>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="password" name="password" id="password" class="validate">
                    <label for="password">Your password</label>

                    <span class="red lighten-5"><?= isset($_SESSION['error_password']) && !empty($_SESSION['error_password']) ? $_SESSION['error_password']: ''?></span>
                    <?php session::destroy('error_password') ?>
                </div>

                <div class="input-field col s10 offset-s1">
                    <input type="password" name="repassword" id="repassword" class="validate">
                    <label for="repassword">Re-enter password</label>

                    <span class="red lighten-5"><?= isset($_SESSION['error_repassword']) && !empty($_SESSION['error_repassword']) ? $_SESSION['error_repassword']: ''?></span>
                    <?php session::destroy('error_repassword') ?>
                </div>

                <div class="row">
                    <div class="col s11 offset-s1 center-align">
                        <a href="index.php">Already member? Sign in here</a>
                    </div>
                </div>


                <div class="center-align">
                    <button class="waves-effect waves-light btn">Create account</button>
                </div>
            </div>
        </form>
    </div>

</div>
        </section>
        <aside id="right-column-postovi">
            <form>
                <fieldset class="fskontakt">
                    <legend class="leg">Kontakt</legend>
                    Aleksa Radanović<br>
                    Desanke Maksimović 9, Vračar<br>
                    Srbija, 11000 Beograd<br>
                    Radno vreme: Od 08:00 do 17:00<br><br>
                    Tel: 064 39 33 041<br>
                    e-mail: aradanovic@protonmail.com
                </fieldset>
            </form>
            <form>
                <fieldset id="mapscale" class="fsmap">
                    <legend class="leg">Mapa</legend>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.6813489865581!2d20.46917662922561!3d44.80678469869368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa6b4c0d405%3A0x315843c3917d714c!2sDesanke+Maksimovi%C4%87+9%2C+Beograd+11000!5e0!3m2!1sen!2srs!4v1514323216604"   frameborder="0" style="border:0;" width="100%" height="95%" allowfullscreen></iframe>
                </fieldset>
            </form>
        </aside>
    </div>
</div>
</body>

</html>