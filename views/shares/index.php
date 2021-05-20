<?php if(isset($_SESSION['is_logged_in'])): ?>
<div class="text-end">
    <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success btn-share m-3">Share Something</a>
</div>
<?php endif; ?>
<?php foreach($viewModel as $item): ?>
    <div class="well bg-light m-3 p-3">
        <h3><?php echo $item['title']; ?></h3>
        <small class="text-end"><?php echo $item['created_date'] ?></small>
        <hr />
        <p><?php echo $item['body']; ?></p>
        <br />
        <a href="<?php echo $item['link']; ?>" class="btn btn-primary" target="_blank">Go To Website</a>
    </div>
<?php endforeach; ?>
