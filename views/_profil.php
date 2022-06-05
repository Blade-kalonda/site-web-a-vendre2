<?php
    require_once 'display_header.php';
    $param = "<span class='fw-bold text-primary'>" . ds_info('names') .' '. ds_info('firstname') . "</span>";

    echo display_header("Bienvenu(e) sur votre profil " . $param);
?>

<section>
    <div class="row">
        <div class="col-md-3 profil-left">
            <div class="d-flex flex-column p-3 bg-dark text-light h-100">
                <div class="card bg-transparent border-0 rounded-0">
                <img class="card-img-top rounded-circle w-50 mx-auto" style="width: 50px; height: 50px" src="<?= ds_info('image') ?>" alt="">
                <div class="card-body px-0 text-center">
                    <h5 class="card-title  mb-0"><?= $param ?></h5>
                    <h6 class="text-primary"><?= ds_info('rolle') === 'chef' ? 'Chef de classe' : ds_info('rolle') ?></h6>
                    <p class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary btn-sm me-2">S'abonner</a>
                        <a href="#" class="btn btn-light btn-sm mr-2">Message</a>
                    </p>
                </div>
                <div class="dropdown-divider border-primary"></div>

                <nav class="flex-column">
                    <a href="admin.php" class="nav-link text-white-50 active"><i class="fas fa-techometer-alt"></i> Tableau de bord</a>
                    <a href="admin.php" class="nav-link text-white-50 active"><i class="fas fa-heading"></i> Articles</a>
                    <a href="admin.php" class="nav-link text-white-50 active"><i class="fas fa-users"></i> Utilisateurs</a>
                    <a href="admin.php" class="nav-link text-white-50 active"><i class="fas fa-comments"></i> Commentaires</a>
                    <a href="admin.php" class="nav-link text-white-50 active"><i class="fas fa-question"></i> Aide</a>
                </nav>
                <div class="dropdown-divider border-primary"></div>

                <div class="card-body text-capitalize text-center row">
                    <div class="col-sm-4">
                        <div class="profil-stat-value">19</div>
                        <div class="profil-stat-title">Posts</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="profil-stat-value">156</div>
                        <div class="profil-stat-title">Comms</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="profil-stat-value">89</div>
                        <div class="profil-stat-title">Projects</div>
                    </div>
                </div>
                <div class="dropdown-divider border-primary"></div>

                <div class="card-body">
                    <h6 class="text-center text-light">A propos de <?= $param ?></h6>
                    <p class="text-white-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, labore recusandae alias odit at vero assumenda laboriosam impedit a nesciunt nemo? Totam molestiae, hic labore sit quod nemo itaque dolores.
                    </p>
                </div>
                <div class="dropdown-divider border-primary"></div>

                <div class="card-header text-uppercase text-center">
                    <i class="fas fa-globe-africa"></i> Liens importants
                </div>
                <ul class="list-group List-group-flush">
                    <li class="list-group-item bg-transparent border-bottom">
                        <a href="#" class="text-light"><i class="fab fa-facebook-square"></i> Facebook</a>
                    </li>
                    <li class="list-group-item bg-transparent border-bottom">
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i> Twitter</a>
                    </li>
                    <li class="list-group-item bg-transparent border-bottom">
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i> Youtube</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9 profil-right">
            <div class="container-fluid py-3">
            <?= display_session_alert(); ?>
            <?= display_session_alert('danger'); ?>

            <div class="row mx-0">
                <div class="col-md-6">
                    <div class="col-12 border-bottom border-primary mb-1">
                        <h1 class="text-center">Informations</h1>
                    </div>
                    <span class="fw-bold">Nom : </span><span class="fs-6"><?= ds_info('names'); ?></span><br>
                        <span class="fw-bold">Postnom : </span><span class="fs-6"><?= ds_info('firstname'); ?></span><br>
                        <span class="fw-bold">Prénom : </span><span class="fs-6"><?= ds_info('lastname'); ?></span><br>
                        <span class="fw-bold">Naissance : </span><span class="fs-6"><?= ds_info('born_at'); ?></span><br>
                        <span class="fw-bold">Sexe : </span><span class="fs-6"><?= ds_info('gender'); ?></span><br>
                        <span class="fw-bold">Adresse : </span><span class="fs-6"><?= ds_info('adresse'); ?></span><br>
                        <span class="fw-bold">Téléphone : </span><span class="fs-6"><?= ds_info('phone'); ?></span><br>
                        <span class="fw-bold">Biographie : </span><span class="fs-6"><?= ds_info('bio'); ?></span><br>
                    <div class="dropdown-divider border-primary"></div>

                    <div class="d-flex">
                        <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#staticBackdropProfilForm">Modifier le profil</button>
                        <button class="btn btn-outline-primary mr-1" data-bs-toggle="modal" data-bs-target="#staticBackdropPasswordForm">Changer le mot de passe</button>
                    </div>
                </div>

                <div class="col-md">
                    <div class="row">
                        
                        <div class="modal fade" id="staticBackdropProfilForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier vos informations</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="image">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" for="profil-image"><i class="fas fa-image"></i></span>
                                                <input type="file" class="form-control" id="profil-image" name="image"   />
                                                <?= display_errors($errors, 'image') ?>
                                            </div>
                                        </div>
                                        <div class="email">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-email"><i class="fas fa-at"></i></span>
                                                <input type="text" class="form-control" id="email" placeholder="Modifier votre email" name="email" value="<?= get_data($_POST, 'email'), $userInfo->email ?>" required pattern=".+@gmail.com" title="Ex : utilisateur@gmail.com" >
                                                <?= display_errors($errors, 'email') ?>
                                            </div>
                                        </div>
                                        <div class="born_at">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-born_at"><i class="fas fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control" id="born_at" placeholder="Ex: 01/01/1998" name="born_at" value="<?= get_data($_POST, 'born_at'), $userInfo->born_at ?>" required>
                                                <?= display_errors($errors, 'born_at') ?>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-left align-items-center mb-3 fs-6">
                                            <div class="form-check">
                                                <input type="radio" name="gender" id="male" value="male" class="form-check-input" checked>
                                                <label for="male" class="form-check-label">Homme</label>
                                            </div>
                                            <div class="form-check ms-4">
                                                <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                                                <label for="female" class="form-check-label">Femme</label>
                                            </div>
                                            <?= display_errors($errors, 'gender') ?>
                                        </div>
                                        <div class="adresse">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control" id="adresse" placeholder="Votre adresse" name="adresse" value="<?= get_data($_POST, 'adresse'), $userInfo->adresse ?>" required>
                                                <?= display_errors($errors, 'adresse') ?>
                                            </div>
                                        </div>
                                        <div class="phone">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                                                <input type="text" class="form-control" id="bont_at" placeholder="Ex: +243 8........" name="phone" value="<?= get_data($_POST, 'phone'), $userInfo->phone ?>" required>
                                                <?= display_errors($errors, 'phone') ?>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                                <textarea name="bio" id="" cols="30" rows="5" class="form-control" placeholder="Votre biographie"><?= get_data($_POST, 'bio'), $userInfo->bio ?></textarea>
                                                <?= display_errors($errors, 'bio') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="update_user" class="mx-2 btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                                
                                </div>
                            </div>
                        </div>
                            
                        <div class="modal fade" id="staticBackdropPasswordForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier votre mot de passe</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="email">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-old_password"><i class="fas fa-lock"></i></span>
                                                    <input 
                                                        type="password" 
                                                        class="form-control" 
                                                        id="old_password" 
                                                        placeholder="Mot de passe actuel" 
                                                        name="old_password" 
                                                        value="<?= get_data($_POST, 'old_password') ?>"
                                                        aria-label="old_password"
                                                        aria-describedby="basic_old_password"
                                                        required>
                                                    <?= display_errors($errors, 'old_password') ?>
                                                </div>
                                            </div>
                                            <div class="bont_at">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-new_password"><i class="fas fa-lock"></i></span>
                                                    <input 
                                                        type="password" 
                                                        class="form-control" 
                                                        id="old_password" 
                                                        placeholder="Nouveau mot de passe" 
                                                        name="new_password" 
                                                        value="<?= get_data($_POST, 'new_password') ?>"
                                                        aria-label="new_password"
                                                        aria-describedby="basic-new_password"
                                                        required>
                                                    <?= display_errors($errors, 'new_password') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="adresse">
                                                <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-confirm_password"><i class="fas fa-lock"></i></span>
                                                    <input 
                                                        type="password" 
                                                        class="form-control" 
                                                        id="confirm_password" 
                                                        placeholder="Confirmer le ouveau mot de passe" 
                                                        name="confirm_password" 
                                                        value="<?= get_data($_POST, 'confirm_password') ?>"
                                                        aria-label="confirm_password"
                                                        aria-describedby="basic-confirm_password"
                                                        required>
                                                    <?= display_errors($errors, 'confirm_password') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="change_passwordr" class="mx-2 btn btn-primary" >Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>