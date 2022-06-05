<?php
    require_once 'display_header.php';

    echo display_header('Connexion');

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
                            <div class="email">
                                <label for="email" class="form-label">Email : </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="mail" class="form-control" id="email" placeholder="Adrèsse mail" name="email" value="<?= get_data($_POST, 'email') ?>" required pattern=".+@gmail.com" title="Ex : utilisateur@gmail.com" >
                                    <?= display_errors($errors, 'email') ?>
                                </div>
                            </div>

                            <div class="password">
                                <label for="password" class="form-label">Mot de passe</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" value="<?= get_data($_POST, 'password') ?>" required>
                                    <?= display_errors($errors, 'password') ?>
                                </div>
                            </div>

                            <input type="submit" name="login" value="Connexion" class="btn btn-primary w-100">
                        </form>
                        <p class="py-2 w-100">Vous ne possédez pas encore un compte ?<a href="register.php"> Inscrivez-vous ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

