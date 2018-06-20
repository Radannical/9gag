<?php
//require_once __DIR__. '/../config/dbconnect.php'; // database connection
//require __DIR__. '/../classes/model.class.php'; // Model


$Dbhandler  = new Config() ;
$Model      = new Model($Dbhandler);



if ( isset($_POST) && !empty($_POST) )
{

    if ( !$return = $Model->validateForm($_POST)  )
    {
        $email      =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password   =  $_POST['password'];

        if ($Model->signIn( $email, $password ))
        {
            session::set('user_session', $email);
        }else{
            session::set('login_issue', "Can't log you in. check your details.");
        }

    }else{
        foreach ($return as $field => $error) {
            session::set($field, $error);
        }
    }


}