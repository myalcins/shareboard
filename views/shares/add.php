<div class="d-flex justify-content-center mt-3">
    <form class="m-3" method="post" action="<?php echo ROOT_URL; ?>shares/add">
        <label class="text-success mb-2"><h4>Share Your Notes</h4></label>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <div class="input-group">
                <input type="text" name="title" placeholder="title" class="form-control">
            </div>
        </div>
        <div class="mb-3">
        <label for="body" class="form-label">Body</label>
            <div class="input-group">
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>
        </div>
        <div class="mb-3">
        <label for="link" class="form-label">Link</label>
            <div class="input-group">
                <input type="text" name="link" placeholder="www." class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary m-2">
                <a type="submit" class="btn btn-danger m-2">Cancel</a>
            </div>
        </div>
    </form>
</div>