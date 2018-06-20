<?php
require __DIR__. '/includes/header.php';
!isset($_SESSION['user_session']) ? header("location:index.php"):null;
?>

<div class="row">
    <div class="col s12 offset-s1 m12 l12 z-depth-1 white">
        <?php $user = explode("@", $_SESSION['user_session']) ?>
        Welcome, <b><?= isset($user[0]) ? $user[0] : '' ?></b>

        <div class="divider"></div>

        <h2>Congratulations</h2>
        <p>This is a dashboard than can only be access by logged memebers.</p>
        <p>If you are here, it means you created an account and logged in successfully.</p>

        <div class="divider"></div>
        <p>If you want to log out, use the button bellow:</p>
        <a href="logout.php" class="waves-effect waves-light btn">Log out</a>
    </div>
</div>


<?php require __DIR__. '/includes/footer.php'; ?>
