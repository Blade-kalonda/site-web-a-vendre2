<?php
    // $titre = "Modifier une catégorie.";
    // require_once 'partials/_header.php';

    // not_connected();
    
    // if($_SESSION['rolle'] !== "prefet") redirect_to('category_list.php');

    // $errors = [];

    // if(!isset($_GET['id']) || (int) $_GET['id'] < 0) {
    //     redirect_to('category_list.php');
    // }
    // $id = (int) $_GET['id'];

    // $q = $db->prepare("SELECT * FROM category WHERE id = :id");
    // $q->execute(['id' => $id]);
    // $currentCategory = $q->fetch(PDO::FETCH_OBJ);

    // if(!$currentCategory) {
    //     redirect_to('category_list.php');
    // }

    // if(isset($_POST['edit_category'])) {
    //     $submit = array_pop($_POST);
    //     $category = sanitize($_POST['category']);

    //     if(!not_empty($category)) {
    //         $errors['category'] = "Champ obligatoire."; 
    //     } elseif(!length_validation($category, 3, 30)) {
    //         $errors['category'] = "Doit etre compris entre 3 et 30 caractères."; 
    //     }
        
    //     if(empty($errors)) {
    //         $q = $db->prepare("UPDATE category SET title = :title WHERE id = :id");
    //         $state = $q->execute([
    //             'title' => $category,
    //             'id' => $id
    //         ]);

    //         if($state) {
    //             $_SESSION['success'] ="catégorie modifier avec succès";
    //             redirect_to('category_list.php');
    //         }else {
    //             $_SESSION['danger'] = "Echec lors de la modification de la catégorie";
    //         }
        
    //     }else {
    //         $_SESSION['danger'] = "Remplir correctement le formulaire.";
    //     }
    // }

    // require_once 'views/_category_edit.php';

    // require_once 'partials/_footer.php';