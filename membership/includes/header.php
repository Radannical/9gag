<?php
require_once __DIR__. '/../classes/session.php';
require_once __DIR__. '/../config/dbconnect.php'; // database connection
require __DIR__. '/../classes/model.class.php'; // Model


$Dbhandler  = new Config() ;
$Model      = new Model($Dbhandler);

!isset($_SESSION) ? session::init() : null ;

// automatic connection system
//if a cookie is set and the user is not actually connected
if( isset($_COOKIE['membership']) && !isset($_SESSION['user_session']) )
{
    // Get the user's email from the cookie
    $cookie = explode("#~#",$_COOKIE['membership']);
    $cookie_email = isset($cookie[0]) ? $cookie[0] : null;
    $cookie_hash = isset($cookie[1]) ? $cookie[1] : null;

    $userData = $Model->getUser( $cookie_email ) ;

    // We create a hash of the user email and his IP address like we did while creating the cookie with our hashing function
    $input = $cookie_email.$_SERVER['REMOTE_ADDR'];


    if( $cookie_hash === crypt($input, $cookie_hash) ){
        // we use the email from our data base to set the session, not the one from the cookie
        $_SESSION['user_session'] = $userData->user_email;

        // we set the cookie again to extend its expiration date
        setcookie('membership', $cookie_email.'#~#'.$crypt, time() + 3600 * 24 * 7, '/', '', false, true);
    }else{
        // Otherwise, we unset the cookie by setting its expiration date to NOW
        setcookie('membership', '', time() - 3600, '/', '', false, true);
    }
}
?>
<html lang="en">
<head>
    <title>Welcome to Membership</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./design/materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Our customized css -->
    <link rel="stylesheet" type="text/css" href="./design/style.css">
</head>
<body>