<?php
    require_once 'display_header.php';
    echo display_header('Inscription');
?>

<section>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-8 col-sm mx-auto">
                <?= display_session_alert(); ?>
                <?= display_session_alert('danger'); ?>
                <div class="card bg-dark text-light">
                    <div class="card-body border-top border-orange">
                        <form action="" method="post">
                            <div class="nom">
                                <label for="name" class="form-label">Nom : </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" name="name" value="<?= get_data($_POST, 'name') ?>" required>
                                    <?= display_errors($errors, 'name') ?>
                                </div>
                            </div>

                            <div class="postnom">
                                <label for="lastname" class="form-label">Postnom : </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="firstname" placeholder="Entrez votre postnom" name="lastname" value="<?= get_data($_POST, 'name') ?>" required>
                                    <?= display_errors($errors, 'lastname') ?>
                                </div>
                            </div>

                            <div class="prenom">
                                <label for="firstname" class="form-label">Prénom : </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="lastname" placeholder="Entrez votre prénom" name="firstname" value="<?= get_data($_POST, 'firstname') ?>" required>
                                    <?= display_errors($errors, 'firstname') ?>
                                </div>
                            </div>

                            <div class="email">
                                <label for="email" class="form-label">Email : </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                    <input type="text" class="form-control" id="email" placeholder="Entrez votre email" name="email" value="<?= get_data($_POST, 'email') ?>" required pattern=".+@gmail.com" title="Ex : utilisateur@gmail.com" >
                                    <?= display_errors($errors, 'email') ?>
                                </div>
                            </div>

                            <div class="role">
                                <label for="role">Rôle:</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="role"><i class="fas fa-user-cog"></i></label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="eleve" <?=!isset($_POST['role']) ? 'seleted' : get_selected_value('role', 'eleve') ?>>Elève</option>
                                        <option value="chef" <?= get_selected_value('role', 'chef') ?>>Chef de classe</option>
                                        <option value="prefet" <?= get_selected_value('role', 'prefet') ?>>Prefet</option>
                                    </select>
                                    <?= display_errors($errors, 'role') ?>
                                </div>
                            </div>

                            <input type="submit" name="add_user" value="S'inscrire" class="btn btn-primary w-100">
                        </form>
                        <p class="py-2 w-100">Vous possédez déjà un compte ?<a href="login.php"> Connectez-vous ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
