<?php

function display_header(string $title = 'Titre non defini') {

    return <<<HTML
        <section class="admin-header">
            <div class="border-top border-5 border-primary"></div>
            <div class="bg-dark text-light">
                <div class="container">
                    <div class="row">
                        <h6>$title</h6>
                    </div>
                </div>
            </div>
            <div class="border-bottom border-5 border-primary"></div>
        </section>
    HTML;

}