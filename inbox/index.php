<?php
session_start();
include_once("db.php");
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

    <a href="/index.php">
        <div class="e1"><img></div>
    </a>

    <div class="title">

    </div>

    <div class="tab">

        <a href="/index.php">
            <div class="nav3">
                <button class="btn" type="button">Posts</button>
            </div>
        </a>

        <a href="../membership/index.php">
            <div class="nav7">
                <button class="btn" type="button">Account</button>
            </div>
        </a>

    </div>
    <div class="e2">

        <section id="left-column-postovi">

            <h3>Postovi</h3><br>
            <?php
            require_once("nbbc/nbbc.php");

            $bbcode     = new BBCode;
            $sql        = "SELECT * FROM posts ORDER BY id DESC ";
            $res        = mysqli_query($db, $sql) or die (mysqli_query());
            $posts      = "";

            if (mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_assoc($res)){
                    $id         = $row['id'];
                    $title      = $row['title'];
                    $content    = $row['content'];
                    $date       = $row['date'];
                    $admin      ="<div>
                                      <a href='del_post.php?pid=$id'>Delete</a>&nbsp;
                                      <a href='edit_post.php?pid=$id'>Edit</a>
                                  </div>";
                    $output     = $bbcode->Parse($content);
                    $posts     .="<div>
                                      <h2><a href='view_post.php?pid=$id'>$title</a></h2>
                                      <h3>$date</h3>
                                      <p>$output</p>
                                      $admin<hr />
                                  </div>";
                }
                echo $posts;
            } else {
                echo "There are no posts to display!";
            }
            ?>
            <a href="post.php" target="_blank">Post</a>
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