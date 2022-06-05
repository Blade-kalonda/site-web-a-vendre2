<?php

    require_once 'partials/_header.php';
    
    // connected();

    $errors = [];
    
    // if(isset($_POST['login'])) {
    //     $submit = array_pop($_POST);
    //     $email = sanitize($_POST['email']);
    //     $password = sanitize($_POST['password']);

    //     if(!not_empty($_POST)) {
    //         $errors['global'] = "Remplissez correctement le formulaire.";
    //         $_SESSION['danger'] = $errors['global'];
    //     }

    //     if(!not_empty($email)) {
    //         $errors['email'] = "Champ obligatoire.";
    //     }

    //     if(!not_empty($password)) {
    //         $errors['password'] = "Champ obligatoire.";
    //     }

    //     if(empty($errors)) {
    //         $q = $db->prepare("SELECT * FROM users WHERE email = :email AND active = '1'");
    //         $q->execute(['email' => $email]);
    //         $user = $q->fetch(PDO::FETCH_OBJ);

    //         if(!$user OR !password_verify($password, $user->pass)) {
    //             $_SESSION['danger'] = "Adrèsse mail ou mot de passe invalides.<p class='fs-6'>Ou veuillez activer votre compte en suivant le lien envoyer à <span class='fw-bold'>{$email}.<p></span>";
    //         } else {
    //             foreach ($user as $index => $item) {
    //                 $_SESSION[$index] = $item;
    //                 if($index === 'pass') unset($_SESSION[$index]);
    //             }
    //             $_SESSION['success'] = "Bienvenu(e) " . $_SESSION['names'] .' '. $_SESSION['firstname'];
    //             $_SESSION['auth'] = true;
    //             redirect_to("profil.php?id=" . $user->id);
    //         }

    //     }else {
    //         $_SESSION['danger'] = "Remplissez correctement le formulaire.";
    //     }
    // }
    require_once 'views/_login.php';

    require_once 'partials/_footer.php';