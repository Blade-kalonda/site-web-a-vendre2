<?php
    require_once 'display_header.php';
    echo display_header('Liste des catégories');

?>

<section class="py-3">
    <div class="container">
            <?= display_session_alert() ?>
            <?= display_session_alert('danger') ?>
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="text-start text-primary">Toutes les catégories</h4>
                    </div>
                    <div class="col-md-4">
                        <form action="">
                            <div class="input-group">
                                <input 
                                    type="text" 
                                    class="form-control rounded-pill" 
                                    placeholder="Rechercher..." 
                                    aria-label="Rechercher..." 
                                    aria-describedby="basic-addon1" 
                                    name="q" 
                                    value="<?= get_data($_GET, 'q'); ?>">
                                <button class="input-group-text rounded-pill btn-primary" id="basic-addon1">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <th scope="row"><?= $category->id ?></th>
                                <td><?= $category->title ?></td>
                                <td><?= $category->created_at ?></td>
                                <td>
                                    <a 
                                        href="category_edit.php?id=<?= $category->id ?>" 
                                        class="btn btn-sm btn-primary rounded-0"><i class="fas fa-edit"></i>
                                    </a>
                                    <a 
                                        href="category_delete.php?id=<?= $category->id ?>" 
                                        class="btn btn-sm btn-danger rounded-0"
                                        onclick="return(confirm('Confirmer la suppression de cet élément'))"><i class="fas fa-trash-alt"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-dark rounded-0" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '', $category->title.$category->id) ?>"><i class="fas fa-info-circle"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="category-info">
                <!-- Modal -->
                <?php foreach($categories as $category): ?>
                    <div class="modal fade" id="<?= str_replace(' ', '', $category->title.$category->id) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?= $category->title ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Catégorie N° <?= $category->id ?> crée le <?= time_format($category->created_at) ?> par <?= $fullName ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
</section>