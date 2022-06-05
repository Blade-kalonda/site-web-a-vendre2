<?php
    require_once 'display_header.php';

    echo display_header('Liste des utilisateurs');

?>

<section>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-8 col-sm mx-auto">
                <?= display_session_alert(); ?>
                <?= display_session_alert('warning'); ?>
            </div>
        </div>
    </div>
</section>
