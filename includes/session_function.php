<?php
date_default_timezone_set('Africa/Kinshasa');
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

if (session_status() === PHP_SESSION_NONE) session_start();

function display_session_alert(string $type = 'success')
{
//    if ($type === 'success' || $type === null) $alertType = 'success'; else $alertType = 'warning';

    if (isset($_SESSION[$type])) {
        $alert = "<div class=\"alert alert-$type text-center fs-5 col-md-10 mx-auto\">
            $_SESSION[$type]
        </div>";
        unset($_SESSION[$type]);
    } else {
        $alert = '';
    }

    return $alert;
}

function not_connected() {
    if(!isset($_SESSION['auth'])) {
        redirect_to('login.php');
    }
}

function connected() {
    if(isset($_SESSION['auth'])) {
        redirect_to('profil.php?id=' . $_SESSION['id']);
    }
}

function ds_info(?string $param = null): ?string {

    return $_SESSION[$param] ?? null;
}

function logged_in() {
    return isset($_SESSION['id'], $_SESSION['email'], $_SESSION['role']) ?: false;
}


function eleve() {
    return isset($_SESSION['eleve']) && $_SESSION['role'] === 'eleve' ?: false;
}

function chef() {
    return isset($_SESSION['chef']) && $_SESSION['role'] === 'chef' ?: false;
}

function prefet() {
    return isset($_SESSION['prefet']) && $_SESSION['role'] === 'prefet' ?: false;
}