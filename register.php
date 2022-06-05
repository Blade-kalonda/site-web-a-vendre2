<?php
    require_once 'partials/_header.php';
    // if(isset($_SESSION['auth'])) {
    //     redirect_to('profil.php?id=' . $_SESSION['id']);
    // }

    $errors = [];
    // $roles = ['eleve','chef','prefet'];

    // if(isset($_POST['add_user'])) {

    //     $submit = array_pop($_POST);

    //     if(!not_empty($_POST)) {
    //         $errors['global'] = "Tous les champs sont obligatoire.";
    //         $_SESSION['danger'] = $errors['global'];
    //     }

    //     $name = sanitize($_POST['name']);
    //     $firstname = sanitize($_POST['firstname']);
    //     $lastname = sanitize($_POST['lastname']);
    //     $email = sanitize($_POST['email']);
    //     $role = sanitize($_POST['role']);

    //     if(!length_validation($name, 3, 20)) {
    //         $errors['name'] = "Doit etre compis entre 3 et 20 caratères.";
    //     }
    //     if(!length_validation($firstname, 3, 20)) {
    //         $errors['firstname'] = "Doit etre compis entre 3 et 20 caratères.";
    //     }
    //     if(!length_validation($lastname, 3, 20)) {
    //         $errors['lastname'] = "Doit etre compis entre 3 et 20 caratères.";
    //     }
    //     if(!not_empty($email)) {
    //         $errors['email'] = "Email invalide.";
    //     }

    //     if(!in_array($role, $roles)) {
    //         $errors['email'] = "Role invalide.";
    //     }

    //     $usedEmails = [];
    //     $dbEmails = $db->query("SELECT email FROM users")->fetchAll(PDO::FETCH_OBJ);
    //     foreach ($dbEmails as $dbEmail) {
    //         $dbEmails[] = $dbEmail->email;
    //     }
    //     if(in_array($email, $dbEmails)) {
    //         $errors['email'] = "Cet email existe déjà.";
    //     }

    //     if(empty($errors)) {
    //         $password = password_hash('1234567890', PASSWORD_ARGON2I);
    //         //Envoyer un mail a l'user
    //         //Enregistrer l'user
    //         $db->beginTransaction();
    //             $q = $db->prepare("INSERT INTO users (names, firstname, lastname, email, pass, rolle)
    //             VALUES(:names, :firstname, :lastname, :email, :pass, :rolle)");
    //             $q->execute([
    //                 'names'       => $name,
    //                 'firstname'  => $firstname,
    //                 'lastname'   => $lastname,
    //                 'email'      => $email,
    //                 'pass'       => $password,
    //                 'rolle'      => $role
    //             ]);
    //             $user_id = $db->lastInsertId();
    //             $q = $db->query("INSERT INTO user_add (user_id) VALUES ($user_id)");
    //         $state = $db->commit();
    //         if($state) {
    //             //Envoyer un mail a l'user
    //         $_SESSION['success'] = "Elève n°{$user_id} enrégistré avec succès";
    //         redirect_to('user_list.php');
    //         }else {
    //             $_SESSION['danger'] = "Echec lors de la création du compte";
    //         }
    //     }else {
    //         $_SESSION['danger'] = "Remplir correctement le formulaire";
    //     }
    // }
    
    require_once 'views/_register.php';

    require_once 'partials/_footer.php';