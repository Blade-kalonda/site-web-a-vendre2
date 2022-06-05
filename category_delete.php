<?php
    // require_once 'partials/_header.php';

    // not_connected();
    
    // if($_SESSION['rolle'] !== "prefet") redirect_to('category_list.php');
    
    // if(!isset($_GET['id']) || (int) $_GET['id'] < 0) {
    //     redirect_to('category_list.php');
    // }
    // $id = (int) $_GET['id'];

    // $q = $db->prepare("DELETE FROM category WHERE id = :id");
    // $state = $q->execute(['id' => $id]);

    // if($state) {
    //     $_SESSION['success'] ="catégorie supprimer avec succès";
    //     redirect_to('category_list.php');
    // }else {
    //     $_SESSION['danger'] = "Echec lors de la suppression de la catégorie";
    //     redirect_to('category_list.php');
    // }