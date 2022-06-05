<?php
    // $titre = "Ajouter une catégorie";
    // require_once 'partials/_header.php';

    // not_connected();

    // if($_SESSION['rolle'] === "eleve") redirect_to('category_list.php');

    // $errors = [];
    // $category = $_POST['category'];

    // if(isset($_POST['add_category'])) {
    //     //verifier les donnéez et le formulaire n'est aps vide
    //     //1. verifier que ca soit un texte
    //     //2. la longueur de la categorie
    //     //3. purifaction

    //     $submit = array_pop($_POST);
    //     $categories = explode(',', $category);

    //     $categories = sanitize($categories);

    //     if(empty($category)) {
    //         $errors['category'] = 'Champ obligatoire';
    //     } elseif(mb_strlen($category) < 3) {
    //         $errors['category'] = 'Doit conténir plus de 3 caracteres';
    //     } elseif(mb_strlen($category) > 30) {
    //         $errors['category'] = 'Doit conténir moins de 30 caracteres';
    //     }

    //     if(!not_empty($categories)) {
    //         $errors['category'] = "L'une des categories est vide, Veuillez le remplir correctement.";
    //     }

    //     if(empty($errors)) {
    //         $db->beginTransaction();
    //         foreach ($categories as $category) {
    //             $q = $db->prepare("INSERT INTO category (title) VALUES (:title)");
    //             $q->execute(['title' => $category]);
    //         }
            

    //         if($db->commit()) {
    //             $_SESSION['success'] = count($categories) . " catégorie inserée avec succès";
    //             redirect_to('category_list.php');
    //         }else {
    //             $_SESSION['danger'] = "Echec lors de l'ajout des catégories";
    //         }
    //     }
    // }

    // require_once 'views/_category.php';

    // require_once 'partials/_footer.php';