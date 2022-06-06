<?php
define('WEBSITE_NAME', 'Site web a vendre');
define('WEBSITE_URL', 'https://localhost/php');
define('BASE_FILE_ROOT', 'uploads');
define('DEFAULT_PROFIL_PIC', 'logo3.png');



    $host='mysql:dbname=php';
    $user='root';
    $pass='';

    try {
        $db = new PDO ($host, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('erreur : ' . $e->getMessage());
    }