<?php

function getTitle() {
    return "ShareBoard";
}

require_once 'templates/header.php';
?>

<div class="row">
    <?php require($view); ?>
</div>
