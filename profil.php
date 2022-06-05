<?php
    require_once 'includes/session_function.php';

    // $title = "Profil de " . $_SESSION['names'] . ' ' . $_SESSION['firstname'];

    require_once 'partials/_header.php';

    // not_connected();

    // if(!isset($_GET['id']) || (int)$_GET['id'] < 0 || (int)$_GET['id'] !== $_SESSION['id']) {
    //     redirect_to('login.php');
    // }

    // $q = $db->prepare("SELECT u.id, names, firstname, lastname, email, pass, rolle, created_at, active, born_at, gender, 
    //                 adresse, phone, image, bio, user_id FROM users AS u LEFT JOIN user_add AS ua ON ua.user_id = u.id 
    //                 WHERE u.id = :id");
    // $q->execute(['id' => $_SESSION['id']]);

    // $userInfo = $q->fetch(PDO::FETCH_OBJ);
    
    // $errors = [];
    // $profilForm = false;
    // $passwordForm = false;

    // if(isset($_POST['update_user'])) {
    //     $submit = array_pop($_POST);
    //     $_POST = sanitize($_POST);
    //     extract($_POST);
        
    //     $bornTimesTamp = strtotime($born_at);

    //     !$bornTimesTamp ? $errors['born_at'] = "Date invalide." : $formatDate = date('Y-m-d', $bornTimesTamp);

    //     if(!empty($_FILES['image']['name'])) {
    //         if($_FILES['image']['error'] === 0) {
    //             extract($_FILES);
    //             $tmpImg = $image['tmp_name'] ?? null;
    //             $nameImg = $image['name'] ?? null;
    //             $typeImg = $image['type'] ?? null;
    //             if(!in_array($typeImg, ['image/jpeg', 'image/jpg', 'image/png'])) {
    //                 $errors['image'] = "Image invalide.";
    //             }
    //         }
    //     }

    //     if(!file_exists(BASE_FILE_ROOT . '/profile')) {
    //         mkdir(BASE_FILE_ROOT . '/profile', 0777, true);
    //     }

    //     $profileImageFolder = BASE_FILE_ROOT . '/profile';
    //     $pathImg = $profileImageFolder . '/' . (!isset($nameImg) ? DEFAULT_PROFIL_PIC : $nameImg);

    //     if(!not_empty($errors)) {
    //         $q = $db->prepare("UPDATE users AS u LEFT JOIN user_add AS ua ON u.id = ua.user_id SET ua.born_at = :born_at, gender
    //         = :gender, adresse = :adresse, phone = :phone, image = :image, bio = :bio, email = :email WHERE u.id = :id");
    //         $success = $q->execute([
    //             'born_at'       => $formatDate,
    //             'gender'        => $gender,
    //             'adresse'       => $adresse,
    //             'phone'         => $phone,
    //             'image'         => $image,
    //             'bio'           => $bio,
    //             'email'         => $email,
    //             'id'            => $_SESSION['id']
    //         ]);

    //         if($success) {
    //             if(move_uploaded_file($tmpImg, $pathImg)) $_SESSION['success'] = "Image mise à jour.";

    //             $q = $db->prepare("SELECT u.id, names, firstname, lastname, email, pass, rolle, created_at, active, born_at, gender, 
    //                 adresse, phone, image, bio, user_id FROM users AS u LEFT JOIN user_add AS ua ON ua.user_id = u.id 
    //                 WHERE u.id = :id");
    //             $q->execute(['id' => $_SESSION['id']]);

    //             $userInfo = $q->fetch(PDO::FETCH_OBJ);

    //             foreach($userInfo as $index => $info) {
    //                 $_SESSION[$index] = $info;
    //                 varDumping($_SESSION);
    //             }

    //             $_SESSION['success'] = "Profil modifier avec succès.";
    //         }
    //     }
    // }

    require_once 'views/_profil.php';

    require_once 'partials/_footer.php';