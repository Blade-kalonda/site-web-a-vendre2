<?php
    require_once 'display_header.php';
    echo display_header('Catégories');

?>

<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-10 col-sm mx-auto">
            <?= display_session_alert() ?>
            <?= display_session_alert('danger') ?>
                <div class="card bg-dark">
                    <div class="card-header text-center text-primary">
                        <h4>Ajouter une catégorie</h4>
                    </div>
                    <div class="card-body text-light">
                        <form action="" method="post">
                            <div class="form-group mb-1">
                                <label for="category" class="form-label">Nom de la catégorie :</label>
                                <input 
                                type="text" 
                                id="category" 
                                class="form-control" 
                                name="category" 
                                placeholder="Saisis des catégories"
                                value="<?= get_data($_POST, 'category'); ?>">
                                <?= display_errors($errors, 'category'); ?>
                            </div>
                            <button type="submit" name="add_category" class="btn mt-1 w-100 btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>