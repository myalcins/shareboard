<?php

function getTitle() {
    return "ShareBoard";
}

require_once 'templates/header.php';
?>

<div class="row">
    <?php Messages::display(); ?>
    <?php require($view); ?>
</div>
